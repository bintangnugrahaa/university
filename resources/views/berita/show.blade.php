@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Latest News for You
        </h1>
        <p class="text-xneutral-200 text-sm sm:text-base font-montserrat font-semibold">
            Discover today’s top stories
        </p>

        <div class="mt-11">
            <div class="space-y-[14px] mb-3">
                <h2 class="uppercase font-montserrat font-semibold text-xneutral-400 text-[22px] sm:text-3xl">
                    {{ $berita->title }}
                </h2>
                <div class="flex items-center gap-[18px] font-montserrat text-xs text-xneutral-200 font-semibold">
                    <div class="flex gap-[10px] items-center">
                        <img src="/assets/images/profile-picture.png" alt="Admin" />
                        <span>by <span class="text-xneutral-400">{{ $berita->user->name }}</span></span>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($berita->created_at)->format('F d, Y') }}</span>
                </div>
            </div>
            <p class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-8 text-xneutral-300">
                {!! $berita->content !!}
            </p>
            <div class="w-full mt-4 rounded-3xl overflow-hidden">
                <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}"
                    class="w-full h-auto object-cover max-h-[430px]" />
            </div>
        </div>
    </article>
@endsection
