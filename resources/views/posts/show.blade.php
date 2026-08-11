@extends('layouts.app')

@section('title', $post->title . ' - Casa Smart Shop')


@section('meta_description', $post->meta_description ?? Str::limit(strip_tags($post->excerpt), 150))
@section('og_type', 'article')

@section('content')
    <article class="max-w-3xl mx-auto bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
        <div class="mb-6">
            <a href="{{ route('categories.show', $post->category->slug) }}"
                class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-3 py-1 rounded-full hover:bg-amber-100 transition">
                {{ $post->category->name }}
            </a>
            @if ($post->image)
                <div class="mb-8 overflow-hidden rounded-2xl shadow-sm">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-auto max-h-[450px] object-cover">
                </div>
            @endif
            <h1 class="text-3xl font-extrabold text-slate-900 mt-3 mb-2">{{ $post->title }}</h1>
            <p class="text-xs text-gray-400">Publicado em
                {{ $post->published_at ? $post->published_at->format('d/m/Y') : '' }}</p>
        </div>

        <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
            {!! nl2br(e($post->content)) !!}
        </div>

        @if ($post->products->count() > 0)
            <div class="mt-10 pt-6 border-t border-gray-200">
                <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                    🛒 Produtos Recomendados neste Artigo
                </h3>
                <div class="grid grid-cols-1 gap-4">
                    @foreach ($post->products as $product)
                        <div
                            class="border border-amber-200 bg-amber-50/40 p-4 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div>
                                @if ($product->is_featured)
                                    <span
                                        class="text-[10px] bg-amber-500 text-white font-bold px-2 py-0.5 rounded uppercase">Melhor
                                        Escolha</span>
                                @endif

                                <div class="flex items-center gap-4 mb-4">
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                            class="w-20 h-20 object-contain rounded-lg bg-white p-2 border border-gray-100">
                                    @endif
                                    <div>
                                        <h4 class="font-bold text-slate-900 text-lg">{{ $product->name }}</h4>
                                        @if ($product->brand)
                                            <p class="text-xs text-gray-500 mt-0.5">Marca: {{ $product->brand }}</p>
                                        @endif
                                    </div>
                                </div>



                                {{-- <h4 class="font-bold text-slate-800 text-base mt-1">{{ $product->name }}</h4>
                                <p class="text-xs text-gray-500">Marca: {{ $product->brand ?? 'Geral' }}</p> --}}
                                @if ($product->price)
                                    <p class="text-lg font-extrabold text-slate-900">R$
                                        {{ number_format($product->price, 2, ',', '.') }}</p>
                                @endif
                            </div>
                            <a href="{{ $product->affiliate_link }}" target="_blank" rel="nofollow sponsored"
                                class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold px-5 py-2.5 rounded-lg shadow transition text-sm whitespace-nowrap">
                                Ver na Amazon ➔
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </article>
@endsection
