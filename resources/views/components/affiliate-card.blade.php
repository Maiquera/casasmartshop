@props([
    'title',
    'description' => null,
    'image',
    'link',
    'price' => null,
    'store' => 'amazon'
])

@php
    $store = strtolower(trim($store));
@endphp

<div class="my-8 max-w-3xl mx-auto overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-shadow hover:shadow-md flex flex-col sm:flex-row">
    
    <div class="flex w-full items-center justify-center border-b border-gray-100 bg-white p-6 sm:w-2/5 sm:border-b-0 sm:border-r">
        <img src="{{ $image }}" alt="{{ $title }}" class="max-h-48 object-contain mix-blend-multiply transition duration-300 hover:scale-105" loading="lazy">
    </div>

    <div class="flex w-full flex-col justify-between p-6 sm:w-3/5">
        <div>
            <!-- BADGE DA LOJA -->
            <div class="mb-2">
                @if($store === 'mercadolivre')
                    <span class="inline-block rounded-full bg-yellow-100 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-yellow-800">
                        Mercado Livre
                    </span>
                @elseif($store === 'amazon')
                    <span class="inline-block rounded-full bg-amber-100 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-amber-800">
                        Amazon
                    </span>
                @else
                    <span class="inline-block rounded-full bg-slate-100 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-slate-700">
                        {{ ucfirst($store) }}
                    </span>
                @endif
            </div>

            <h4 class="mb-2 text-xl font-extrabold leading-snug text-slate-900">{{ $title }}</h4>
            
            @if(!empty($description))
                <p class="mb-4 text-sm text-slate-600 line-clamp-3 leading-relaxed">{{ $description }}</p>
            @endif
        </div>

        <div class="mt-2 flex items-center justify-between border-t border-gray-100 pt-4">
            <div>
                @if(!empty($price))
                    <span class="mb-0.5 block text-[10px] font-bold uppercase tracking-wider text-slate-400">Preço estimado</span>
                    <span class="text-2xl font-extrabold text-emerald-600">R$ {{ number_format($price, 2, ',', '.') }}</span>
                @else
                    <span class="text-sm font-medium italic text-slate-400">Verificar valor no site</span>
                @endif
            </div>

            @if($store === 'mercadolivre')
                <a href="{{ $link }}" target="_blank" rel="nofollow noopener" class="inline-flex items-center gap-2 rounded-xl bg-yellow-400 px-5 py-3 text-sm font-bold text-slate-900 shadow-sm transition duration-200 hover:bg-yellow-500">
                    Ver no Mercado Livre &rarr;
                </a>
            @elseif($store === 'amazon')
                <a href="{{ $link }}" target="_blank" rel="nofollow noopener" class="inline-flex items-center gap-2 rounded-xl bg-amber-500 px-5 py-3 text-sm font-bold text-slate-900 shadow-sm transition duration-200 hover:bg-amber-600">
                    Ver na Amazon &rarr;
                </a>
            @else
                <a href="{{ $link }}" target="_blank" rel="nofollow noopener" class="inline-flex items-center gap-2 rounded-xl bg-slate-900 px-5 py-3 text-sm font-bold text-white shadow-sm transition duration-200 hover:bg-slate-800">
                    Comprar Agora &rarr;
                </a>
            @endif
        </div>
    </div>
</div>