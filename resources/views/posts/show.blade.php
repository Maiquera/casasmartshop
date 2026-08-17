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

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-72 md:h-96 object-cover rounded-xl mb-5">
                @endif

                <h1 class="text-2xl md:text-4xl font-extrabold text-slate-700 leading-tight mb-3">
                    {{ $post->title }}
                </h1>

                <div class="mb-10 space-y-6">
                    @if (is_array($post->content))
                        @foreach ($post->content as $block)
                            {{-- 1. BLOCO DE TEXTO (Com suas estilizações do Tailwind Prose) --}}
                            @if (($block['type'] ?? null) === 'text')
                                <div
                                    class="prose max-w-none leading-relaxed 
                            
                            prose-h2:mt-3
                            prose-h2:mb-1
                            prose-h2:text-slate-800

                            prose-h3:my-1
                            prose-h3:text-slate-700
                    
                            prose-p:my-0
                            prose-p:indent-2

                            prose-ul:list-disc
                            prose-ul:my-0
                            marker:text-amber-500 marker:font-bold

                            prose-a:none
                            prose-a:text-hover:text-amber-600 prose-a:font-semibold prose-a:underline

                            prose-img:rounded-xl

                            prose-figure:my-4 prose-figure:flex prose-figure:flex-col prose-figure:justify-center prose-figure:items-center prose-figure:gap-2 prose-figure:bg-black
                            ">
                                    {!! $block['data']['content'] !!}
                                </div>

                                {{-- 2. BLOCO DO CARD DE PRODUTO AFILIADO --}}
                            @elseif(($block['type'] ?? null) === 'affiliate_product')
                                <x-affiliate-card :title="$block['data']['title']" :description="$block['data']['description'] ?? null" :image="$block['data']['image']" :link="$block['data']['link']"
                                    :price="$block['data']['price'] ?? null" :store="$block['data']['store'] ?? 'amazon'" />
                            @endif
                        @endforeach
                    @else
                        {{-- Compatibilidade para posts antigos que não usam o Builder --}}
                        <div
                            class="prose max-w-none text-slate-700 leading-6
                            prose-ul:list-disc prose-ul:pl-6
                            prose-p:my-1
                            prose-h2:mt-3 prose-h2:mb-1
                            prose-h3:mt-3 prose-h3:mb-1
                            marker:text-amber-500 marker:font-bold">
                            {!! $post->content !!}
                        </div>
                    @endif
                </div>





                {{-- <div
                    class="prose max-w-none leading-relaxed
                            
                            prose-h2:mt-3
                            prose-h2:mb-1
                            prose-h2:text-slate-800

                            prose-h3:my-1
                            prose-h3:text-slate-700
                    
                            prose-p:my-0
                            prose-p:indent-2

                            prose-ul:list-disc
                            prose-ul:my-0
                            marker:text-amber-500 marker:font-bold

                            prose-a:none
                            prose-a:text-hover:text-amber-600 prose-a:font-semibold prose-a:underline

                            prose-img:rounded-xl

                            prose-figure:my-4 prose-figure:flex prose-figure:flex-col prose-figure:justify-center prose-figure:items-center prose-figure:gap-2 prose-figure:bg-black
                ">
                </div> --}}

                {{-- 
                <x-affiliate-card title="Echo Dot 5ª Geração com Alexa"
                    description="O smart speaker de maior sucesso para automação residencial. Controle luzes, fechaduras e rotinas com facilidade."
                    image="https://m.media-amazon.com/images/I/71hwX2L8k1L._AC_SL1000_.jpg" link="https://amzn.to/exemplo"
                    price="415,00" store="amazon" /> --}}







                <!-- Bloco de Produtos Afiliados (Amazon CTA) -->
                {{-- @if ($post->products && $post->products->isNotEmpty())
                    <div class="mt-12 pt-8 border-t border-gray-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            🛒 Produto(s) Recomendado(s) neste Artigo
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach ($post->products as $product)
                                <div
                                    class="bg-amber-50/50 border border-amber-200/60 rounded-xl p-5 flex flex-col justify-between">
                                    <div>
                                        @if ($product->is_featured)
                                            <span
                                                class="bg-amber-500 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full mb-2 inline-block">
                                                Melhor Escolha
                                            </span>
                                        @endif

                                        <div class="flex items-center gap-4 mb-4">
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}"
                                                    class="w-20 h-20 object-contain rounded-lg bg-white p-2 border border-gray-100">
                                            @endif
                                            <div>
                                                <h4 class="font-bold text-slate-900 text-lg">{{ $product->name }}</h4>
                                                @if ($product->brand)
                                                    <p class="text-xs text-gray-500 mt-0.5">Marca: {{ $product->brand }}</p>
                                                @endif
                                                @if ($product->price)
                                                    <p class="text-lg font-extrabold text-slate-900 mt-1">R$
                                                        {{ number_format($product->price, 2, ',', '.') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ $product->affiliate_link }}" target="_blank" rel="nofollow noopener"
                                        class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-sm px-4 py-2 rounded-lg transition shadow-sm">
                                        Ver na Amazon &rarr;
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif --}}
            </main>

            <aside class="lg:col-span-1">
                <x-sidebar-posts :category="$post->category" :except-post-id="$post->id" />
            </aside>
        </div>
    </div>
@endsection
