<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Honeypot Check
        if ($request->filled('website_hp')) {
            // If the hidden field is filled, it's a bot.
            // Fail silently or return success to fool the bot.
            return back()->with('success', 'Сообщение отправлено!');
        }

        // 2. Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
            'cf-turnstile-response' => 'required', // Enforce Turnstile
        ]);

        // 3. Turnstile Validation (Server-side)
        // Note: You need TURNSTILE_SECRET_KEY in .env
        $turnstileSecret = config('services.turnstile.secret');
        if ($turnstileSecret) {
            $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret' => $turnstileSecret,
                'response' => $request->input('cf-turnstile-response'),
                'remoteip' => $request->ip(),
            ]);

            if (!$response->json('success')) {
                return back()->withErrors(['cf-turnstile-response' => 'Пожалуйста, пройдите проверку на бота.'])->withInput();
            }
        }

        // 4. Send Email
        try {
            // Send to the admin email
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            Log::error('Contact form email error: ' . $e->getMessage());
            return back()->with('error', 'Ошибка отправки сообщения. Пожалуйста, попробуйте позже.');
        }

        return back()->with('success', 'Спасибо! Ваше сообщение успешно отправлено.');
    }
}
