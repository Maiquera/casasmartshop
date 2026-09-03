@extends('layouts.app')

@section('title', 'Casa Smart Shop - Seu Portal de Casa Inteligente & Automação')

@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-12 mb-2">

        <div class="lg:col-span-5">
            <h1 class="text-3xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-2">
                Transforme sua casa em uma <span class="text-amber-500">Casa Inteligente</span>
            </h1>
            <p class="text-slate-600 text-sm md:text-base max-w-2xl">
                Reviews, comparativos, tutoriais e as melhores ofertas para automatizar sua casa com segurança.
            </p>
        </div>

        <div class="lg:col-span-7 flex justify-center lg:justify-end">
            <img src="{{ asset('images/home_hero_final.webp') }}" class="w-full" alt="Sala Inteligente">
        </div>

    </div>
    <h2 class="text-1xl md:text-2xl font-extrabold text-slate-900 tracking-tight mb-2">ÚLTIMOS ARTIGOS</h2>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <div class="lg:col-span-8 space-y-8">

            @if ($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($posts as $post)
                        <article
                            class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                            <div>
                                <div class="p-5">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span
                                            class="text-[11px] font-bold text-amber-600 uppercase tracking-wider bg-amber-50 px-2.5 py-0.5 rounded-full">
                                            {{ $post->category->name }}
                                        </span>
                                        <span class="text-xs text-gray-400">•
                                            {{ $post->created_at->format('d/m/Y') }}</span>
                                    </div>

                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->title }}" class="w-full h-48 object-contain rounded-t-lg">

                                    <h2
                                        class="font-bold text-slate-900 text-lg leading-snug group-hover:text-amber-600 transition mb-2 line-clamp-2">
                                        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h2>

                                    <p class="text-slate-600 text-xs line-clamp-3 leading-relaxed">
                                        {{ $post->excerpt ?: Str::limit(strip_tags($post->clean_content), 120) }}
                                    </p>
                                </div>
                            </div>

                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="inline-flex items-center gap-1 text-xs font-bold text-slate-900 hover:text-amber-600 transition">
                                    Ler artigo completo &rarr;
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Paginação -->
                <div class="pt-4 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="bg-white p-8 rounded-2xl border border-gray-100 text-center text-slate-500">
                    Nenhum artigo encontrado.
                </div>
            @endif

        </div>

        <aside class="lg:col-span-4 space-y-8 sticky top-24">

            <!-- NEWSLETTER -->
            <div class="bg-slate-900 text-white p-6 rounded-2xl shadow-lg border border-slate-800 relative overflow-hidden">
                <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-amber-500/10 rounded-full blur-xl pointer-events-none">
                </div>

                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xl">📩</span>
                    <h3 class="font-bold text-base text-white">Smart Club Newsletter</h3>
                </div>

                <p class="text-xs text-slate-300 mb-5 leading-relaxed">
                    Receba quinzenalmente novidades, cupons de desconto para dispositivos e guias exclusivos de automação no
                    seu e-mail.
                </p>

                @if (session('newsletter_success'))
                    <div
                        class="p-3 bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs rounded-xl font-medium mb-3">
                        {{ session('newsletter_success') }}
                    </div>
                @endif

                @error('email')
                    <div class="p-3 bg-rose-500/20 border border-rose-500/40 text-rose-300 text-xs rounded-xl font-medium mb-3">
                        {{ $message }}
                    </div>
                @enderror

                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <input type="email" name="email" required placeholder="seuemail@exemplo.com"
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 text-xs focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                    </div>

                    <button type="submit"
                        class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-4 rounded-xl transition duration-200 text-xs shadow-md flex items-center justify-center gap-2">
                        Quero Receber Dicas &rarr;
                    </button>
                </form>

                <p class="text-[10px] text-slate-500 text-center mt-3">Zero spam. Cancele sua inscrição quando quiser.</p>
            </div>

            <!-- ÚLTIMOS POSTS SIDEBAR -->
            <x-sidebar-posts />

        </aside>

    </div>

@endsection
