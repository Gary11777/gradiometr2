@extends('layouts.app')

@section('title', 'О нас')

@section('content')
<div class="bg-dark-900 min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white mb-8 text-center">О компании</h1>
        
        <div class="prose prose-invert prose-lg mx-auto text-gray-300">
            <p class="lead text-xl text-gray-200">
                Мы — группа специалистов с более чем 20-летним опытом в области разработки электронных устройств. В нашу команду входят инженеры, конструкторы и программисты.
            </p>
            
            <figure class="my-8">
                <img src="{{ asset('images/about/photo_garand101_22.jpg') }}" alt="Команда за работой" class="rounded-xl shadow-lg border border-dark-700 w-full">
                <figcaption class="text-center text-sm text-gray-500 mt-2">Обсуждение результатов измерений</figcaption>
            </figure>

            <h3 class="text-brand-400">Наш опыт</h3>
            <p>
                За это время мы реализовали более 50 проектов в различных областях:
            </p>
            <ul class="list-disc pl-4 space-y-2 marker:text-brand-500">
                <li>Приборы и встроенные системы на микроконтроллерах;</li>
                <li>Аналоговая и цифровая электроника;</li>
                <li>Системы телеметрии (Wi-Fi, Bluetooth, GSM);</li>
                <li>Устройства оцифровки сигналов;</li>
                <li>Робототехника;</li>
                <li><strong>Феррозондовые измерители магнитного поля.</strong></li>
            </ul>

            <h3 class="text-brand-400 mt-8">Наша цель</h3>
            <p>
                Обеспечить клиентов качественным оборудованием по доступной цене. Мы достигаем этого за счет тщательного подбора компонентов, соблюдая баланс между стоимостью и надежностью.
            </p>
        </div>
    </div>
</div>
@endsection

