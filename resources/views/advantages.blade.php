@extends('layouts.app')

@section('title', 'Преимущества')

@section('content')
<div class="bg-dark-900 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 transition duration-700 transform" 
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-4'">
                Преимущества Garand 101
            </h1>
            <p class="text-xl text-gray-400 transition duration-700 delay-100 transform"
               :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'">
                Почему выбирают наш магнитометр
            </p>
        </div>

        <div class="space-y-24">
            <!-- Visual Indication -->
            <div class="flex flex-col md:flex-row items-center gap-12" 
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition duration-1000">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/advantages/photo_garand101_10.jpg') }}" alt="График на экране" class="rounded-xl shadow-2xl border border-dark-700 w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-brand-400 mb-4">Наглядная визуализация</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Экран отображает график значений в реальном времени (до 40 секунд истории). Это позволяет легко идентифицировать объект и исключает пропуски.
                    </p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start"><span class="text-brand-500 mr-2">•</span> Не нужно анализировать цифры в уме.</li>
                        <li class="flex items-start"><span class="text-brand-500 mr-2">•</span> Видно "волну" при прохождении над объектом.</li>
                        <li class="flex items-start"><span class="text-brand-500 mr-2">•</span> История измерений по маршруту.</li>
                    </ul>
                </div>
            </div>

            <!-- Continuous Measurement -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-12"
                 x-data="{ shown: false }" x-intersect.threshold.0.2="shown = true"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition duration-1000">
                <div class="md:w-1/2">
                    <!-- Placeholder or reuse existing image if unique one not available -->
                    <div class="bg-dark-800 rounded-xl h-64 flex items-center justify-center border border-dark-700">
                        <svg class="w-24 h-24 text-dark-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-brand-400 mb-4">Непрерывность и скорость</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Garand 101 измеряет магнитное поле непрерывно по линии движения. Вы можете двигаться с любой скоростью без остановок. Это исключает вероятность пропустить небольшие аномалии.
                    </p>
                    <p class="text-gray-300 leading-relaxed">
                        Два микропроцессора обеспечивают от 15 000 до 20 000 измерений в секунду.
                    </p>
                </div>
            </div>

            <!-- Other Advantages Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-12">
                <div class="bg-dark-800 p-6 rounded-lg border border-dark-700 hover:border-brand-500/50 transition duration-300">
                    <h3 class="text-lg font-semibold text-white mb-2">Умная зарядка</h3>
                    <p class="text-gray-400 text-sm">Автоматическое отключение при полной зарядке. Работа до 28 часов.</p>
                </div>
                <div class="bg-dark-800 p-6 rounded-lg border border-dark-700 hover:border-brand-500/50 transition duration-300">
                    <h3 class="text-lg font-semibold text-white mb-2">Стабильность</h3>
                    <p class="text-gray-400 text-sm">Результаты слабо подвержены влиянию температуры. Электронный подавитель дрейфа.</p>
                </div>
                <div class="bg-dark-800 p-6 rounded-lg border border-dark-700 hover:border-brand-500/50 transition duration-300">
                    <h3 class="text-lg font-semibold text-white mb-2">Компактность</h3>
                    <p class="text-gray-400 text-sm">Вес 2 кг. Цельная жесткая конструкция. Удобен для длительных переходов.</p>
                </div>
            </div>
            
            <div class="text-center pt-12">
                 <a href="{{ route('comparing') }}" class="text-brand-400 hover:text-brand-300 font-medium transition flex items-center justify-center">
                    Сравнить с конкурентами <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

