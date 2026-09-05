<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links Úteis | Casa Smart Shop</title>
    <!-- Tailwind CSS CDN para renderização rápida -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #0F172A; /* Grafite Dark do site */
            color: #FFFFFF;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        .btn-link {
            background-color: #1E293B;
            border: 1px solid #334155;
            transition: all 0.2s ease-in-out;
        }
        .btn-link:hover {
            background-color: #2563EB; /* Azul Tech do site */
            border-color: #2563EB;
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-between p-4 sm:p-6">
    <div class="w-full max-w-md flex flex-col items-center mt-6">
        
        <div class="w-24 h-24 rounded-full flex items-center justify-center text-3xl font-bold overflow-hidden">
            <img src="{{ asset('images/icon_final.png') }}" alt="Casa Smart Shop" class="w-full object-cover p-2">
        </div>

        <h1 class="text-xl font-bold bg-gradient-to-r from-white via-sky-400 to-[#ca9540] bg-clip-text text-transparent mb-2">
            Casa Smart Shop
        </h1>
        <p class="text-sm text-slate-400 text-center mb-6 px-4">
            Transforme sua casa em um lar inteligente<br>
            🏠✨<br>
            Reviews, tutoriais e as melhores ofertas.
        </p>

        <div class="w-full space-y-3.5">
            <a href="https://casasmartshop.com.br/" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🌐</span>
                    <span>Acessar o Site Oficial</span>
                </span>
                <span class="text-slate-400 group-hover:text-white">→</span>
            </a>

            <a href="https://casasmartshop.com.br/posts/echo-show-5-3a-geracao-o-smart-display-que-transforma-sua-casa-em-um-lar-inteligente" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group border-blue-500/50">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🔊</span>
                    <span>Review: Echo Show 5 (3ª Geração)</span>
                </span>
                <span class="text-xs bg-blue-600 text-white px-2 py-1 rounded-md font-semibold uppercase">Novo</span>
            </a>

            <a href="https://casasmartshop.com.br/categoria/Ilumina%C3%A7%C3%A3o-Inteligente" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group">
                <span class="flex items-center gap-3">
                    <span class="text-xl">💡</span>
                    <span>Guia de Iluminação Inteligente</span>
                </span>
                <span class="text-slate-400 group-hover:text-white">→</span>
            </a>

            <a href="https://casasmartshop.com.br/categoria/robos-aspiradores-limpadores" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🤖</span>
                    <span>Melhores Robôs Limpadores</span>
                </span>
                <span class="text-slate-400 group-hover:text-white">→</span>
            </a>

            <a href="https://casasmartshop.com.br/categoria/seguranca-inteligente" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🔒</span>
                    <span>Inteligência em Segurança</span>
                </span>
                <span class="text-slate-400 group-hover:text-white">→</span>
            </a>

            <a href="https://casasmartshop.com.br/categoria/casa-inteligente" target="_blank" class="btn-link w-full p-4 rounded-xl flex items-center justify-between font-medium shadow-md group">
                <span class="flex items-center gap-3">
                    <span class="text-xl">✨</span>
                    <span>Eletrodomésticos Smart</span>
                </span>
                <span class="text-slate-400 group-hover:text-white">→</span>
            </a>
        </div>
    </div>

    <footer class="mt-10 mb-4 text-center text-xs text-slate-500">
        <p>© 2026 Casa Smart Shop. Conteúdo protegido por direitos autorais.</p>
    </footer>

</body>
</html>