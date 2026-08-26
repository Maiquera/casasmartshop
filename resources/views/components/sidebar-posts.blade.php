<div class="space-y-6">
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4 border-b pb-2">
            {{ $title }}
        </h3>

        <div class="space-y-4">
            @forelse ($mostReadPosts as $sidePost)
                @php
                    $imageUrl =
                        $sidePost->first_product_image ?:
                        ($sidePost->image
                            ? asset('storage/' . $sidePost->image)
                            : null);
                @endphp

                <a href="{{ route('posts.show', $sidePost->slug) }}" class="flex items-center gap-3 group">
                    @if ($imageUrl)
                        <img src="{{ $imageUrl }}" alt="{{ $sidePost->title }}"
                            class="w-14 h-14 rounded-xl object-cover shrink-0 group-hover:opacity-90 transition">
                    @else
                        <div
                            class="w-14 h-14 rounded-xl bg-slate-100 shrink-0 flex items-center justify-center text-slate-400 text-xs font-semibold">
                            Smart
                        </div>
                    @endif

                    <div>
                        <span class="text-[10px] font-semibold text-amber-600 uppercase block mb-0.5">
                            {{ $sidePost->category->name ?? 'Geral' }}
                        </span>
                        <h4
                            class="font-bold text-xs text-slate-800 group-hover:text-amber-600 transition line-clamp-2 leading-snug">
                            {{ $sidePost->title }}
                        </h4>
                    </div>
                </a>
            @empty
                <p class="text-xs text-gray-500">Nenhum artigo publicado no momento.</p>
            @endforelse
        </div>
    </div>
</div>
