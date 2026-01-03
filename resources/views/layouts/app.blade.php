<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Garand 101 - профессиональный феррозондовый магнитометр-градиентометр для поиска объектов.">

    <title>{{ config('app.name', 'Garand 101') }} - @yield('title', 'Главная')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Cloudflare Turnstile -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-dark-900 text-gray-200 selection:bg-brand-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navigation -->
    <header x-data="{ mobileMenuOpen: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="{ 'bg-dark-900/80 backdrop-blur-md border-b border-dark-700': scrolled, 'bg-transparent': !scrolled }"
            class="fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="group flex items-center space-x-2">
                        <div class="w-8 h-8 bg-brand-600 rounded-sm transform group-hover:rotate-45 transition duration-500 ease-out"></div>
                        <span class="font-bold text-xl tracking-tight text-white group-hover:text-brand-400 transition">Garand 101</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    @foreach([
                        ['home', 'Главная'],
                        ['advantages', 'Преимущества'],
                        ['specifications', 'Характеристики'],
                        ['comparing', 'Сравнение'],
                        ['photos', 'Фото'],
                        ['buy', 'Купить'],
                        ['about', 'О нас']
                    ] as $item)
                        <a href="{{ route($item[0]) }}" 
                           class="text-sm font-medium transition-colors duration-300 relative group
                                  {{ request()->routeIs($item[0]) ? 'text-brand-400' : 'text-gray-300 hover:text-white' }}">
                            {{ $item[1] }}
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-500 transition-all duration-300 group-hover:w-full
                                         {{ request()->routeIs($item[0]) ? 'w-full' : '' }}"></span>
                        </a>
                    @endforeach
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             x-cloak
             class="md:hidden bg-dark-800 border-b border-dark-700">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                @foreach([
                    ['home', 'Главная'],
                    ['advantages', 'Преимущества'],
                    ['specifications', 'Характеристики'],
                    ['comparing', 'Сравнение'],
                    ['photos', 'Фото'],
                    ['buy', 'Купить'],
                    ['about', 'О нас']
                ] as $item)
                    <a href="{{ route($item[0]) }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium 
                              {{ request()->routeIs($item[0]) ? 'bg-dark-700 text-brand-400' : 'text-gray-300 hover:bg-dark-700 hover:text-white' }}">
                        {{ $item[1] }}
                    </a>
                @endforeach
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                 class="fixed bottom-4 right-4 z-50 bg-brand-900 border border-brand-500 text-brand-100 px-4 py-3 rounded shadow-lg flex items-center space-x-2">
                <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark-950 border-t border-dark-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Brand -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-6 h-6 bg-brand-600 rounded-sm"></div>
                        <span class="font-bold text-lg text-white">Garand 101</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Профессиональное оборудование для поиска.<br>
                        Феррозондовый магнитометр-градиентометр.
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase text-xs tracking-wider">Навигация</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('specifications') }}" class="hover:text-brand-400 transition">Характеристики</a></li>
                        <li><a href="{{ route('buy') }}" class="hover:text-brand-400 transition">Купить</a></li>
                        <li><a href="{{ route('photos') }}" class="hover:text-brand-400 transition">Галерея</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase text-xs tracking-wider">Контакты</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-center space-x-2">
                            <span class="w-4 h-4 text-brand-500">📞</span>
                            <span x-data @click="$el.innerText = '+37529 636-35-97'" class="cursor-pointer hover:text-white transition">Показать номер</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="w-4 h-4 text-brand-500">✉️</span>
                            <a href="mailto:info@gradiometr.com" class="hover:text-white transition">info@gradiometr.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-dark-800 text-center text-xs text-gray-500">
                &copy; {{ date('Y') }} Gradiometr.com. Все права защищены.
            </div>
        </div>
    </footer>

</body>
</html>

