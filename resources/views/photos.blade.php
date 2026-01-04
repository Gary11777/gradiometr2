@extends('layouts.app')

@section('title', 'Фото')

@section('content')
<div class="bg-white min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-12 text-center">Галерея</h1>

        @php
            $photos = [
                'photo_garand101_10.jpg', 'photo_garand101_11.jpg', 'photo_garand101_23.jpg',
                'photo_garand101_4.jpg', 'photo_garand101_5.jpg', 'photo_garand101_6.jpg',
                'photo_garand101_7.jpg', 'photo_garand101_8.jpg'
            ];
            $photoUrls = array_map(function($photo) {
                return asset('images/photos/' . $photo);
            }, $photos);
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
             x-data='{ 
                selected: null, 
                images: @json($photoUrls),
                next() {
                    if (!this.selected) return;
                    let idx = this.images.indexOf(this.selected);
                    if (idx === -1) return;
                    this.selected = this.images[(idx + 1) % this.images.length];
                },
                prev() {
                    if (!this.selected) return;
                    let idx = this.images.indexOf(this.selected);
                    if (idx === -1) return;
                    this.selected = this.images[(idx - 1 + this.images.length) % this.images.length];
                }
             }'
             @keydown.escape.window="selected = null"
             @keydown.arrow-right.window="next()"
             @keydown.arrow-left.window="prev()">
            
            @foreach($photos as $photo)
                <div class="group relative aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 border border-gray-200 cursor-pointer shadow-sm hover:shadow-lg transition duration-300"
                     @click="selected = '{{ asset('images/photos/' . $photo) }}'">
                    <img src="{{ asset('images/photos/' . $photo) }}" alt="Garand 101" 
                         class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300 flex items-center justify-center">
                        <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition duration-300 transform scale-75 group-hover:scale-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
            @endforeach

            <!-- Lightbox Modal -->
            <div x-show="selected" 
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 x-cloak>
                <div class="relative max-w-5xl w-full max-h-screen flex items-center justify-center" @click.away="selected = null">
                    <!-- Close button -->
                    <button @click="selected = null" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition focus:outline-none z-50">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    
                    <!-- Prev Button -->
                    <button @click.stop="prev()" class="absolute left-0 md:-left-16 text-white hover:text-gray-300 transition focus:outline-none p-2 z-50">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    <img :src="selected" @click.stop="next()" class="w-full h-full object-contain rounded-lg shadow-2xl cursor-pointer max-h-[85vh] select-none">

                    <!-- Next Button -->
                    <button @click.stop="next()" class="absolute right-0 md:-right-16 text-white hover:text-gray-300 transition focus:outline-none p-2 z-50">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
