@extends('layouts.app')

@section('title', 'Купить')

@section('content')
<div class="bg-white min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Product Info -->
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Заказать Garand 101</h1>
                
                <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-xl mb-8">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                         <div class="w-full md:w-1/3">
                            <img src="{{ asset('images/buy/photo_garand101_8.jpg') }}" class="rounded-lg shadow-lg w-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-600 mb-2">Garand 101</h2>
                            <p class="text-gray-500 mb-4 text-sm">Феррозондовый магнитометр-градиентометр</p>
                            
                            <div class="space-y-2 mb-6 text-sm">
                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">MPN</span>
                                    <span class="text-gray-900 font-mono">GF101</span>
                                </div>
                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Наличие</span>
                                    <span class="text-green-600 font-medium">В наличии</span>
                                </div>
                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Цена</span>
                                    <span class="text-2xl font-bold text-gray-900">$ 2,200 <span class="text-sm font-normal text-gray-500">USD</span></span>
                                </div>
                            </div>
                            
                            <p class="text-gray-500 text-sm italic">
                                Рекомендуем провести тестирование прибора в реальных условиях при личной встрече (г. Минск).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-xl">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Контакты</h3>
                    
                    <ul class="space-y-6">
                        <li class="flex items-start group">
                            <div class="flex-shrink-0 w-10 h-10 bg-brand-50 rounded-full flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Телефон</p>
                                <p class="text-lg text-gray-900 font-medium cursor-pointer" 
                                   x-data="obfuscatedPhone(['+375', '29', ' ', '636', '-', '35', '-', '97'])"
                                   @click="call()"
                                   title="Позвонить">
                                   <span class="border-b border-dashed border-gray-400 hover:border-brand-500 transition" x-text="displayPhone"></span>
                                </p>
                            </div>
                        </li>
                        
                         <li class="flex items-start group">
                            <div class="flex-shrink-0 w-10 h-10 bg-brand-50 rounded-full flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Email</p>
                                <a href="mailto:info@gradiometr.com" class="text-lg text-gray-900 font-medium hover:text-brand-600 transition">info@gradiometr.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-xl h-fit">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Оставить заявку</h2>
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" x-data="{ submitting: false }" @submit="submitting = true">
                    @csrf
                    
                    <!-- Honeypot Field (Invisible) -->
                    <div class="hidden">
                        <label>Не заполняйте это поле, если вы человек</label>
                        <input type="text" name="website_hp" autocomplete="off" tabindex="-1">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Ваше имя</label>
                        <input type="text" name="name" id="name" required class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition" placeholder="Иван Иванов" value="{{ old('name') }}">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" id="email" required class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition" placeholder="ivan@example.com" value="{{ old('email') }}">
                         @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Телефон (опционально)</label>
                        <input type="tel" name="phone" id="phone" class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition" placeholder="+375..." value="{{ old('phone') }}">
                         @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Сообщение</label>
                        <textarea name="message" id="message" rows="4" required class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition" placeholder="Здравствуйте, хочу купить прибор...">{{ old('message') }}</textarea>
                         @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Cloudflare Turnstile -->
                    <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.key', '1x00000000000000000000AA') }}" data-theme="light"></div>
                    @error('cf-turnstile-response') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                    <button type="submit" 
                            class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center shadow-md"
                            :disabled="submitting">
                        <svg x-show="submitting" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-text="submitting ? 'Отправка...' : 'Отправить заказ'"></span>
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center">
                        Нажимаю кнопку, вы соглашаетесь с обработкой персональных данных.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
