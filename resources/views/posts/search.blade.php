@extends('layouts.app')

@section('title', 'Busca por: ' . $term . ' - Casa Smart Shop')

@section('content')
    <div class="mb-8 border-b border-gray-200 pb-6">
        <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-3 py-1 rounded-full">
            Resultados da busca
        </span>
        <h1 class="text-3xl font-extrabold text-slate-800 mt-3">
            @if($term)
                Exibindo resultados para: <span class="text-[#ca954b]">"{{ $term }}"</span>
            @else
                Todos os artigos
            @endif
        </h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($posts as $post)
            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition flex flex-col">
                @if($post->first_product_image || $post->image)
                    <a href="{{ route('posts.show', $post->slug) }}" class="block overflow-hidden">
                        <img 
                            src="{{ $post->first_product_image ?: asset('storage/' . $post->image) }}" 
                            alt="{{ $post->title }}" 
                            class="w-full h-48 object-cover hover:scale-105 transition duration-300"
                        >
                    </a>
                @endif

                <div class="p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-slate-800 hover:text-amber-600 transition">
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $post->excerpt }}</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400">
                        <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : '' }}</span>
                        <a href="{{ route('posts.show', $post->slug) }}" class="text-amber-600 font-semibold hover:underline">Ler artigo &rarr;</a>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full text-center py-12 text-gray-500">
                Nenhum resultado encontrado para "<strong>{{ $term }}</strong>". Tente buscar por outros termos como "fechadura", "lâmpada" ou "sensor".
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
@endsection