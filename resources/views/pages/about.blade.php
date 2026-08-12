@extends('layouts.app')

@section('title', 'Sobre Nós - Casa Smart Shop')
@section('meta_description', 'Conheça o Casa Smart Shop, seu portal definitivo de automação residencial e casa inteligente.')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-extrabold text-slate-900 mb-6">Sobre o Casa Smart Shop</h1>

    <div class="prose max-w-none text-slate-700 space-y-6">
        <p class="text-lg leading-relaxed">
            O <strong>Casa Smart Shop</strong> nasceu com a missão de descomplicar a automação residencial no Brasil. Trazemos guias práticos, análises imparciais e recomendações dos melhores dispositivos de Casa Inteligente do mercado.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">💡 Guias Práticos</h4>
                <p class="text-xs text-gray-600">Tutoriais passo a passo para configurar iluminação, segurança e áudio inteligente.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🔍 Análises Imparciais</h4>
                <p class="text-xs text-gray-600">Testes e comparações reais sobre fechaduras digitais, robôs aspiradores e mais.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🛒 Melhores Ofertas</h4>
                <p class="text-xs text-gray-600">Curadoria especial com direcionamento seguro para os maiores e-commerces.</p>
            </div>
        </div>

        <p>
            Nosso compromisso é ajudar você a transformar sua casa em um ambiente moderno, prático e eficiente, independentemente do seu nível de conhecimento em tecnologia.
        </p>
    </div>
</div>
@endsection