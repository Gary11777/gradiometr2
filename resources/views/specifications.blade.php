@extends('layouts.app')

@section('title', 'Характеристики')

@section('content')
<div class="bg-dark-900 min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">Технические характеристики</h1>

        <div class="bg-dark-800 rounded-2xl overflow-hidden shadow-xl border border-dark-700 mb-12"
             x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition duration-700">
            <table class="min-w-full divide-y divide-dark-700">
                <tbody class="divide-y divide-dark-700">
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Пороговая чувствительность</td>
                        <td class="px-6 py-4 text-sm text-white font-semibold">0,3 нТл</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Измерительная база</td>
                        <td class="px-6 py-4 text-sm text-white">0,5 м</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Диапазон измерений</td>
                        <td class="px-6 py-4 text-sm text-white">0,5 – 20 000 нТл</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Частота измерений</td>
                        <td class="px-6 py-4 text-sm text-white">1 – 10 Гц (регулируемая)</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Градиентоустойчивость</td>
                        <td class="px-6 py-4 text-sm text-white">не менее 20 000 нТл/м</td>
                    </tr>
                     <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Питание</td>
                        <td class="px-6 py-4 text-sm text-white">4 аккумулятора AA (4.5 - 5.5 В)</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Потребляемая мощность</td>
                        <td class="px-6 py-4 text-sm text-white">0.5 Вт</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Время работы</td>
                        <td class="px-6 py-4 text-sm text-white">28 часов</td>
                    </tr>
                     <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Габариты</td>
                        <td class="px-6 py-4 text-sm text-white">680 х 235 х 120 мм</td>
                    </tr>
                    <tr class="hover:bg-dark-700/50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-gray-400">Масса</td>
                        <td class="px-6 py-4 text-sm text-white">2.3 кг</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-dark-800 p-6 rounded-xl border border-dark-700">
                <h3 class="text-xl font-semibold text-white mb-4">Эксплуатация</h3>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li>Температура: от -20°C до +60°C</li>
                    <li>Влажность: до 75%</li>
                    <li>Скорость движения: до 2 м/с</li>
                </ul>
            </div>
             <div class="bg-dark-800 p-6 rounded-xl border border-dark-700">
                <h3 class="text-xl font-semibold text-white mb-4">Функционал</h3>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li>Цифровая фильтрация сигнала</li>
                    <li>Подавитель температурного дрейфа</li>
                    <li>Звуковая индикация с регулировкой порога</li>
                </ul>
            </div>
        </div>
        
        <div class="flex justify-center">
             <img src="{{ asset('images/specifications/photo_garand101_6.jpg') }}" alt="Garand 101 Вид" class="rounded-lg shadow-2xl max-h-96 object-cover border border-dark-700">
        </div>
    </div>
</div>
@endsection

