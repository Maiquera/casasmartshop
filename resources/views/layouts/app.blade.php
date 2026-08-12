<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Casa Smart Shop - Guia de Automação & Casa Inteligente')</title>

    <meta name="description" content="@yield('meta_description', 'Encontre os melhores guias, análises e dispositivos para transformar sua casa em uma Smart Home.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'Casa Smart Shop')">
    <meta property="og:description" content="@yield('meta_description', 'Guia de Automação & Casa Inteligente')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Casa Smart Shop">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Casa Smart Shop')">
    <meta name="twitter:description" content="@yield('meta_description', 'Guia de Automação & Casa Inteligente')">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <header class="bg-slate-900 text-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-amber-400 flex items-center gap-2">
                🏠 Casa Smart Shop
            </a>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-amber-400 transition">Início</a>
            </nav>
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
                        <li><a href="{{ route('pages.about') }}" class="hover:text-amber-400 transition">Sobre Nós</a>
                        </li>
                        <li><a href="{{ route('pages.privacy') }}" class="hover:text-amber-400 transition">Política de
                                Privacidade & Afiliados</a></li>
                        <li><a href="{{ route('pages.terms') }}" class="hover:text-amber-400 transition">Termos de
                                Uso</a></li>
                        <li><a href="{{ route('pages.contact') }}" class="hover:text-amber-400 transition">Contato</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold text-sm mb-3">Aviso Legal</h4>
                    <p class="text-[11px] leading-relaxed text-slate-500">
                        Como participante do Programa de Associados da Amazon, podemos receber remunerações por compras
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
