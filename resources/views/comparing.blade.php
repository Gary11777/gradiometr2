@extends('layouts.app')

@section('title', 'Сравнение')

@section('content')
<div class="bg-dark-900 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white mb-8 text-center">Сравнение с аналогами</h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto mb-12">
            Garand 101 соответствует лучшим мировым образцам (Bartington, Geoscan, FOERSTER) по ключевым показателям.
        </p>

        <div class="overflow-x-auto bg-dark-800 rounded-2xl border border-dark-700 shadow-xl mb-16"
             x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition duration-700">
            <table class="min-w-full divide-y divide-dark-700">
                <thead>
                    <tr class="bg-dark-700">
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Параметр</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-brand-400 uppercase tracking-wider bg-brand-900/20 border-b-2 border-brand-500">Garand 101</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Grad 01</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">FM 256</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Ferex 4.021</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-dark-700 bg-dark-800">
                    <tr class="hover:bg-dark-700/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">Чувствительность (нТл)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-bold bg-brand-900/10">0,3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">0,1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">0,1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">0,1</td>
                    </tr>
                    <tr class="hover:bg-dark-700/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">Измерений в секунду</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-bold bg-brand-900/10">1 – 10</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">8</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">8</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">8</td>
                    </tr>
                    <tr class="hover:bg-dark-700/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">Рабочая темп. (°C)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-bold bg-brand-900/10">-20 ... +60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">-20 ... +70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">-10 ... +50</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">-35 ... +70</td>
                    </tr>
                    <tr class="hover:bg-dark-700/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">Градиентоустойчивость</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-bold bg-brand-900/10">> 20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">> 20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">15 000</td>
                    </tr>
                     <tr class="hover:bg-dark-700/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">Вес (кг)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-bold bg-brand-900/10">2.3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">2.9</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">2.5</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">4.0</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Недостатки других приборов</h3>
                <p class="text-gray-400 mb-4 leading-relaxed">
                    С другими магнитометрами оператору часто приходится останавливаться, запоминать значения, возвращаться и делать замеры вокруг точки для определения центра аномалии. Это утомляет и снижает скорость поиска.
                </p>
            </div>
            <div>
                 <h3 class="text-xl font-bold text-brand-400 mb-4">Преимущество Garand 101</h3>
                <p class="text-gray-300 mb-4 leading-relaxed">
                    Поиск ведется <strong>без остановок</strong>. Оператор слышит изменение тона сигнала и видит график. Локализация центра аномалии происходит мгновенно легкими движениями вправо-влево.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

