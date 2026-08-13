@extends('layouts.app')

@section('title', 'Categoria: ' . $category->name . ' - Casa Smart Shop')

@section('content')
    <div class="mb-8 border-b border-gray-200 pb-6">
        <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-3 py-1 rounded-full">
            Categoria
        </span>
        <h1 class="text-3xl font-extrabold text-slate-900 mt-3">{{ $category->name }}</h1>
        @if ($category->description)
            <p class="text-gray-600 mt-2 text-sm max-w-2xl">{{ $category->description }}</p>
        @endif
    </div>



    <!-- ESTRUTURA PRINCIPAL: GRID DE 2 COLUNAS -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        <!-- COLUNA PRINCIPAL: FEED DE POSTS (8 Colunas) -->
        <div class="lg:col-span-8 space-y-8">
            @forelse($posts as $post)
                <article
                    class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-slate-800 hover:text-amber-600 transition">
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $post->excerpt }}</p>
                        <div
                            class="mt-4 pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400">
                            <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : '' }}</span>
                            <a href="{{ route('posts.show', $post->slug) }}"
                                class="text-amber-600 font-semibold hover:underline">Ler artigo &rarr;</a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    Nenhum artigo encontrado nesta categoria no momento.
                </div>
            @endforelse
        </div>

        <!-- COLUNA LATERAL: SIDEBAR (4 Colunas) -->
        <aside class="lg:col-span-4 space-y-8 sticky top-24">
            <x-sidebar-posts :category="$category" />
        </aside>

    </div>

@endsection
