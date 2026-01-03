# Garand 101 - Magnetometer Website

A modern, responsive Laravel website for the "Garand 101" gradiometer-magnetometer.

## Project Setup

1.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

2.  **Environment Configuration**
    Copy `.env.example` to `.env` and configure your settings:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    
    Update the following in your `.env`:
    
    **Mail Configuration (Sendmail):**
    ```env
    MAIL_MAILER=sendmail
    MAIL_SENDMAIL_PATH="/usr/sbin/sendmail -t -i"
    MAIL_FROM_ADDRESS="info@gradiometr.com"
    MAIL_FROM_NAME="Gradiometr"
    ```

    **Cloudflare Turnstile (Anti-Bot):**
    Get your keys from Cloudflare and add them:
    ```env
    TURNSTILE_SITE_KEY=your_site_key
    TURNSTILE_SECRET_KEY=your_secret_key
    ```

3.  **Build Assets**
    ```bash
    npm run build
    ```

4.  **Run Application**
    ```bash
    php artisan serve
    ```

## Features

-   **Modern Design:** Built with Tailwind CSS and a custom dark theme.
-   **Interactivity:** Alpine.js used for mobile menu, scroll animations, and modal windows.
-   **Contact Form:** Secure implementation with:
    -   Cloudflare Turnstile
    -   Honeypot field
    -   Rate Limiting
    -   Server-side validation
-   **Responsive:** Fully mobile-first design.

## Structure

-   `resources/views/` - Blade templates for all pages.
-   `resources/views/layouts/app.blade.php` - Main layout file.
-   `app/Http/Controllers/PageController.php` - Handles static page routes.
-   `app/Http/Controllers/ContactController.php` - Handles contact form submission.
-   `public/images/` - Site images organized by page.

## Content Source

Content and images were sourced from the `drafts/` directory and integrated into the views and public storage.
