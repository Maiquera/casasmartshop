@extends('layouts.app')

@section('title', 'Contato - Casa Smart Shop')
@section('meta_description', 'Entre em contato com a equipe do Casa Smart Shop.')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-extrabold text-slate-900 mb-2">Fale Conosco</h1>
    <p class="text-gray-600 text-sm mb-8">Tem alguma dúvida, sugestão de artigo ou proposta de parceria? Envie sua mensagem!</p>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-xl font-medium">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pages.contact.send') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Seu Nome</label>
            <input type="text" name="name" id="name" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-slate-900 text-sm" placeholder="Ex: Maicol Menezes">
        </div>

        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">E-mail</label>
            <input type="email" name="email" id="email" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-slate-900 text-sm" placeholder="seuemail@exemplo.com">
        </div>

        <div>
            <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Assunto</label>
            <input type="text" name="subject" id="subject" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-slate-900 text-sm" placeholder="Dúvida, Parceria ou Sugestão">
        </div>

        <div>
            <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Mensagem</label>
            <textarea name="message" id="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-slate-900 text-sm" placeholder="Escreva sua mensagem aqui..."></textarea>
        </div>

        <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3.5 px-6 rounded-lg transition duration-200 shadow-sm text-sm">
            Enviar Mensagem &rarr;
        </button>
    </form>
</div>
@endsection