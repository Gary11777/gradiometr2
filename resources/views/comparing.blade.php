@extends('layouts.app')

@section('title', 'Сравнение')

@section('content')
<div class="bg-white min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Сравнение с аналогами</h1>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            Garand 101 соответствует лучшим мировым образцам (Bartington, Geoscan, FOERSTER) по ключевым показателям.
        </p>

        <div class="overflow-x-auto bg-white rounded-2xl border border-gray-200 shadow-xl mb-16"
             x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition duration-700">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Параметр</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-brand-600 uppercase tracking-wider bg-brand-50 border-b-2 border-brand-500">Garand 101</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Grad 01</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">FM 256</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ferex 4.021</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Чувствительность (нТл)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold bg-brand-50/50">0,3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">0,1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">0,1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">0,1</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Измерений в секунду</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold bg-brand-50/50">1 – 10</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">8</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">8</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">8</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Рабочая темп. (°C)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold bg-brand-50/50">-20 ... +60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">-20 ... +70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">-10 ... +50</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">-35 ... +70</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Градиентоустойчивость</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold bg-brand-50/50">> 20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">> 20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">20 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15 000</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Вес (кг)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold bg-brand-50/50">2.3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2.9</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2.5</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">4.0</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Недостатки других приборов</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    С другими магнитометрами оператору часто приходится останавливаться, запоминать значения, возвращаться и делать замеры вокруг точки для определения центра аномалии. Это утомляет и снижает скорость поиска.
                </p>
            </div>
            <div>
                 <h3 class="text-xl font-bold text-brand-600 mb-4">Преимущество Garand 101</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Поиск ведется <strong>без остановок</strong>. Оператор слышит изменение тона сигнала и видит график. Локализация центра аномалии происходит мгновенно легкими движениями вправо-влево.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
