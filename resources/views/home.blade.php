@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/photo_garand101_21.jpg') }}" alt="Garand 101" class="w-full h-full object-cover opacity-20">
        <!-- Changed gradient to white -->
        <div class="absolute inset-0 bg-gradient-to-b from-white/60 via-white/40 to-white"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center"
         x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
        <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-gray-900 mb-6 transform transition-all duration-1000"
            :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
            Garand <span class="text-brand-600">101</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto font-light leading-relaxed transform transition-all duration-1000 delay-300"
           :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
            Феррозондовый магнитометр-градиентометр для профессионального поиска.
        </p>
        <div class="transform transition-all duration-1000 delay-500"
             :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
            <a href="{{ route('buy') }}" class="inline-block bg-brand-600 hover:bg-brand-700 text-white font-semibold py-4 px-10 rounded-full transition duration-300 shadow-lg shadow-brand-200 hover:shadow-brand-300">
                Заказать сейчас
            </a>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-lg text-gray-600 leading-relaxed"
           x-data="{ shown: false }" x-intersect.threshold.0.5="shown = true"
           :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
           class="transition duration-1000 ease-out">
            <strong class="text-gray-900">Garand 101</strong> – это пешеходный носимый магнитометр-градиентометр, магнитометрический преобразователь градиента компоненты магнитной индукции в цифровое и графическое представление на экране жидкокристаллического дисплея.
        </p>
    </div>
</section>

<!-- Features Grid -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-16 text-center">Особенности прибора</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-100">
                <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Простота определения</h3>
                <p class="text-gray-600 text-sm">Графическое отображение результатов. Об объекте сигнализирует "волна" на графике и звуковой сигнал.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-200">
                <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Легкий вес</h3>
                <p class="text-gray-600 text-sm">Всего 2 кг. Позволяет длительно проводить исследования без утомления.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-300">
                <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Прочная конструкция</h3>
                <p class="text-gray-600 text-sm">Датчик и блок управления в едином металлическом корпусе. Надежно и удобно.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-100">
                 <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Устойчивость к помехам</h3>
                <p class="text-gray-600 text-sm">Работает даже в условиях сильного электромагнитного загрязнения (город, здания).</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-200">
                 <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Двойная индикация</h3>
                <p class="text-gray-600 text-sm">Звук + график на экране для максимальной информативности.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white p-8 rounded-2xl hover:shadow-xl transition duration-300 border border-gray-200 hover:border-brand-300 group shadow-sm"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition duration-700 delay-300">
                 <div class="w-12 h-12 bg-brand-50 rounded-lg flex items-center justify-center mb-6 text-brand-600 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Простота использования</h3>
                <p class="text-gray-600 text-sm">Нет сложных настроек. Изменение режима "на ходу".</p>
            </div>
        </div>
    </div>
</section>

<!-- Usage Areas -->
<section class="py-24 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:items-center lg:space-x-12">
            <div class="lg:w-1/2 mb-12 lg:mb-0"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                 class="transition duration-1000">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Области применения</h2>
                <p class="text-gray-600 mb-8">Garand 101 эффективно применяется для поиска и обнаружения широкого спектра объектов, от исторических артефактов до промышленных коммуникаций.</p>
                
                <ul class="space-y-4">
                    @foreach([
                        'Объекты из стали и железа на значительной глубине',
                        'Заброшенные скважины',
                        'Исторические артефакты и клады',
                        'Метеориты',
                        'Остатки стен и фундаментов под землей',
                        'Техника времен войн (в т.ч. в болотистой местности)'
                    ] as $item)
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-brand-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="lg:w-1/2 relative"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                 class="transition duration-1000">
                <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden shadow-2xl shadow-gray-200 border border-gray-100">
                    <img src="{{ asset('images/photos/photo_garand101_5.jpg') }}" alt="Garand 101 в работе" class="object-cover w-full h-full transform hover:scale-105 transition duration-700">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-brand-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-white/10"></div>
    <div class="relative max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Готовы начать поиск?</h2>
        <p class="text-brand-50 mb-8 text-lg">Garand 101 соответствует лучшим мировым аналогам по характеристикам, оставаясь доступным и простым в использовании.</p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="{{ route('buy') }}" class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-brand-800 bg-white hover:bg-gray-50 transition shadow-lg">
                Купить прибор
            </a>
            <a href="{{ route('specifications') }}" class="inline-flex justify-center items-center px-8 py-3 border border-white text-base font-medium rounded-full text-white hover:bg-white/10 transition">
                Изучить характеристики
            </a>
        </div>
    </div>
</section>
@endsection
