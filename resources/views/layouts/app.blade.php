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

    <footer class="bg-slate-900 text-gray-400 text-center py-6 border-t border-slate-800">
        <p class="text-sm">&copy; {{ date('Y') }} Casa Smart Shop. Guia de Compras e Automação Residencial.</p>
    </footer>

</body>
</html>