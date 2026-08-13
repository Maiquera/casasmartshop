@extends('layouts.app')

@section('title', $post->title . ' - Casa Smart Shop')
@section('meta_description', $post->meta_description ?? Str::limit(strip_tags($post->excerpt), 150))

@section('og_type', 'article')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <main class="lg:col-span-2 bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">

                <div class="flex items-center gap-2 text-xs font-semibold text-amber-600 uppercase mb-3">
                    <span>{{ $post->category->name ?? 'Geral' }}</span>
                    <span>•</span>
                    <span class="text-slate-400">{{ $post->published_at?->format('d/m/Y') }}</span>
                </div>

                <h1 class="text-2xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-6">
                    {{ $post->title }}
                </h1>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-72 md:h-96 object-cover rounded-xl mb-6">
                @endif

                <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed">
                    {!! $post->content !!}
                </div>
            </main>

            <aside class="lg:col-span-1">
                <x-sidebar-posts :category="$post->category" :except-post-id="$post->id" />
            </aside>
        </div>
    </div>
@endsection
