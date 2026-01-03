@extends('layouts.app')

@section('title', 'Фото')

@section('content')
<div class="bg-dark-900 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">Галерея</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
             x-data="{ selected: null }">
            
            @php
                $photos = [
                    'photo_garand101_10.jpg', 'photo_garand101_11.jpg', 'photo_garand101_23.jpg',
                    'photo_garand101_4.jpg', 'photo_garand101_5.jpg', 'photo_garand101_6.jpg',
                    'photo_garand101_7.jpg', 'photo_garand101_8.jpg'
                ];
            @endphp

            @foreach($photos as $photo)
                <div class="group relative aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-dark-800 border border-dark-700 cursor-pointer"
                     @click="selected = '{{ asset('images/photos/' . $photo) }}'">
                    <img src="{{ asset('images/photos/' . $photo) }}" alt="Garand 101" 
                         class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition duration-300 transform scale-75 group-hover:scale-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
            @endforeach

            <!-- Lightbox Modal -->
            <div x-show="selected" 
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 x-cloak>
                <div class="relative max-w-5xl w-full max-h-screen" @click.away="selected = null">
                    <button @click="selected = null" class="absolute -top-12 right-0 text-white hover:text-brand-400 transition focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <img :src="selected" class="w-full h-full object-contain rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

