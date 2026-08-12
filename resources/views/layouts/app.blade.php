@php
    $navCategories = \App\Models\Category::orderBy('name')->get();
@endphp

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Casa Smart Shop - Seu Guia de Casa Inteligente')</title>
    <meta name="description" content="@yield('meta_description', 'Encontre os melhores guias, análises e dispositivos para transformar sua casa em uma Smart Home.')">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'Casa Smart Shop')">
    <meta property="og:description" content="@yield('meta_description', 'Análises e recomendações dos melhores dispositivos de automação residencial.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Casa Smart Shop">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Casa Smart Shop')">
    <meta name="twitter:description" content="@yield('meta_description', 'Análises e recomendações dos melhores dispositivos de automação residencial.')">

    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    {{-- Mobile --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-blue-100 text-slate-800 antialiased flex flex-col min-h-screen">

    <header class="bg-slate-900 text-slate-200 sticky top-0 z-50 border-b border-gray-100 shadow-sm"
        x-data="{ open: false }">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 gap-4 md:gap-8">

                <div class="flex items-center gap-3 shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                        <img src="{{ asset('images/Logo.png') }}" alt="Casa Smart Shop" class="h-20">    
                        <span
                            class="font-bold bg-gradient-to-r from-white via-sky-400 to-[#ca9540] bg-clip-text text-transparent">
                            CasaSmartShop
                        </span>
                    </a>
                </div>

                <div class="hidden sm:flex items-center flex-1 max-w-2xl mx-auto">
                    <form action="{{ route('home') }}" method="GET" class="w-full relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="O que você procura? Ex: Lâmpadas, Robô Aspirador, Alexa..."
                            class="w-full bg-slate-100 text-sm text-slate-800 pl-10 pr-4 py-2.5 rounded-full focus:outline-none focus:ring-2 focus:ring-amber-500/50 focus:bg-white border border-transparent focus:border-amber-500 transition shadow-inner">
                        <svg class="w-5 h-5 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </form>
                </div>

                <div class="hidden lg:flex items-center gap-4 text-xs font-medium text-slate-500 shrink-0">
                    <a href="{{ route('pages.about') }}" class="hover:text-amber-600 transition">Sobre</a>
                    <span>•</span>
                    <a href="{{ route('pages.contact') }}" class="hover:text-amber-600 transition">Contato</a>
                </div>

                <div class="flex md:hidden items-center">
                    <button @click="open = !open" type="button"
                        class="text-slate-600 hover:text-slate-900 p-2 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div class="hidden md:block bg-slate-900 text-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between text-xs font-semibold py-2.5">
                    <a href="{{ route('home') }}"
                        class="px-3 py-1.5 rounded-lg whitespace-nowrap transition {{ request()->routeIs('home') ? 'bg-[#ca9540] text-slate-950 font-bold' : 'hover:bg-slate-800 hover:text-white' }}">
                         Início
                    </a>

                    @foreach ($navCategories as $category)
                        <a href="{{ route('categories.show', $category->slug) }}"
                            class="px-3 py-1.5 rounded-lg whitespace-nowrap transition {{ request()->is('categoria/' . $category->slug) ? 'bg-[#ca9540] text-slate-950 font-bold' : 'hover:bg-slate-800 hover:text-white' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Menu Drawer Mobile -->
        <div x-show="open" x-cloak class="md:hidden border-t border-gray-100 bg-white px-4 pt-3 pb-6 space-y-3">
            <!-- Busca Mobile -->
            <form action="{{ route('home') }}" method="GET" class="mb-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar no site..."
                    class="w-full bg-slate-100 text-sm text-slate-800 px-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
            </form>

            <a href="{{ route('home') }}"
                class="block text-sm font-semibold text-slate-800 py-1.5 hover:text-amber-600">
                Início
            </a>

            <div class="text-xs font-bold uppercase tracking-wider text-slate-400 pt-2 pb-1">Categorias</div>
            @foreach ($navCategories as $category)
                <a href="{{ route('categories.show', $category->slug) }}"
                    class="block text-sm font-medium text-slate-700 py-1.5 hover:text-amber-600 pl-2 border-l-2 border-slate-100 hover:border-amber-500">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </header>

    <main class="flex-grow max-w-6xl mx-auto px-4 py-8 w-full">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 mt-20 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-white font-bold text-lg mb-3">Casa Smart Shop</h3>
                    <p class="text-xs leading-relaxed text-slate-400">
                        Seu guia definitivo para automação residencial, reviews e recomendações dos melhores
                        dispositivos de Smart Home.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold text-sm mb-3">Links Úteis</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('pages.about') }}" class="hover:text-amber-400 transition">Sobre
                                Nós</a>
                        </li>
                        <li><a href="{{ route('pages.privacy') }}" class="hover:text-amber-400 transition">Política
                                de
                                Privacidade & Afiliados</a></li>
                        <li><a href="{{ route('pages.terms') }}" class="hover:text-amber-400 transition">Termos
                                de
                                Uso</a></li>
                        <li><a href="{{ route('pages.contact') }}"
                                class="hover:text-amber-400 transition">Contato</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold text-sm mb-3">Aviso Legal</h4>
                    <p class="text-[11px] leading-relaxed text-slate-500">
                        Como participante do Programa de Associados da Amazon, podemos receber remunerações por
                        compras
                        qualificadas efetuadas através dos links disponibilizados.
                    </p>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-6 text-center text-xs text-slate-500">
                &copy; {{ date('Y') }} Casa Smart Shop. Todos os direitos reservados.
            </div>
        </div>
    </footer>

</body>

</html>
