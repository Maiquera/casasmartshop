@extends('layouts.app')

@section('title', 'Casa Smart Shop - Dicas e Reviews de Casa Inteligente')

@section('content')
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-slate-900 mb-2">Transforme sua Casa numa Smart Home</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Reviews, guias de instalação e as melhores recomendações de dispositivos
            inteligentes para o seu lar.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($posts as $post)
            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <div class="p-6">
                    <a href="{{ route('categories.show', $post->category->slug) }}"
                        class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-1 rounded-full hover:bg-amber-100 transition">
                        {{ $post->category->name }}
                    </a>
                    <h2 class="text-xl font-bold mt-3 text-slate-800 hover:text-amber-600 transition">
                        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                    </h2>
                    <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $post->excerpt }}</p>
                    <div class="mt-4 pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400">
                        <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : '' }}</span>
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="text-amber-600 font-semibold hover:underline">Ler artigo &rarr;</a>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full text-center py-12 text-gray-500">
                Nenhum artigo publicado no momento.
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
@endsection
