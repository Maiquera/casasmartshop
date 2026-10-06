@extends('layouts.app')

@section('title', 'Sobre Nós - Casa Smart Shop')
@section('meta_description', 'Conheça o Casa Smart Shop, seu portal definitivo de automação residencial e casa inteligente.')

@section('content')
<!-- <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
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
</div> -->

<div class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-extrabold text-slate-900 mb-6">Sobre a Casa Smart Shop</h1>

    <h2 class="text-2xl font-semibold mb-2">Tecnologia para uma casa mais inteligente, simples e prática</h2>
    <div class="prose max-w-none text-slate-700 space-y-6">

        <p class="text-lg leading-relaxed">A <strong>Casa Smart Shop</strong> nasceu com uma ideia simples: tornar a automação residencial mais fácil de entender para quem quer deixar a casa mais inteligente, mas não sabe por onde começar.

            Lâmpadas inteligentes, interruptores, câmeras, assistentes virtuais, robôs aspiradores, fechaduras digitais e outros dispositivos podem transformar bastante a rotina. O problema é que, antes de comprar, surgem várias dúvidas:

            <strong>Será que funciona com Alexa? Vale realmente a pena? É fácil de instalar? Qual modelo escolher? Existe uma opção mais barata que entrega praticamente a mesma coisa?</strong>

            É para ajudar a responder essas perguntas que a Casa Smart Shop existe.

            Aqui você encontra <strong>guias de compra, comparativos, tutoriais, reviews e conteúdos sobre automação residencial</strong>, sempre buscando explicar a tecnologia de forma simples e prática.
        </p>

        <h2>Aqui você vai encontrar</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🏠 Casa Inteligente</h4>

                <p class="text-sm text-gray-600">Conteúdos sobre dispositivos que ajudam a automatizar tarefas do dia a dia, desde tomadas e interruptores inteligentes até equipamentos mais avançados.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">💡 Iluminação Inteligente</h4>

                <p class="text-sm text-gray-600">Comparativos e dicas para escolher lâmpadas, fitas, interruptores e outros dispositivos de iluminação compatíveis com sistemas de automação.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🤖 Robôs Aspiradores e Limpeza</h4>

                <p class="text-sm text-gray-600">Análises, comparativos e guias para quem quer economizar tempo nas tarefas de limpeza da casa.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🔐 Segurança Inteligente</h4>

                <p class="text-sm text-gray-600">Câmeras, sensores, fechaduras digitais e outros equipamentos que podem ajudar a deixar a residência mais segura e conectada.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">🔊 Áudio e Assistentes Virtuais</h4>

                <p class="text-sm text-gray-600">Conteúdos sobre Alexa, dispositivos Echo e outros equipamentos que ajudam a controlar diferentes partes da casa por comandos de voz.</p>
            </div>
            <div class="p-5 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="font-bold text-slate-900 text-base mb-2">📚 Guias e Tutoriais</h4>   

                <p class="text-sm text-gray-600">Conteúdo para quem está começando e também para quem já possui alguns dispositivos inteligentes e quer descobrir novas possibilidades de automação.</p>
            </div>
        </div>
    </div>

    <h2 class="text-2xl font-semibold my-2">Como avaliamos os produtos</h2>

    <p class="text-lg leading-relaxed">Nosso objetivo não é simplesmente listar produtos encontrados na internet.

    Sempre que temos acesso ao dispositivo, buscamos <strong>conhecer e testar o produto na prática</strong>, observando aspectos como instalação, configuração, facilidade de utilização, recursos disponíveis, integração com outros dispositivos e limitações encontradas durante o uso.

    Também consideramos especificações técnicas, informações fornecidas pelos fabricantes, avaliações de consumidores e comparação com produtos semelhantes.

    Quando um produto não foi testado diretamente por nós, procuramos deixar isso claro e separar informações verificadas de experiências que dependem do uso individual.

    A ideia é ajudar você a entender não apenas <strong>o que o produto promete</strong>, mas também <strong>para quem ele realmente faz sentido</strong>.</p>

    <h2 class="text-2xl font-semibold my-2">Experiência real faz diferença</h2>

    <p class="text-lg leading-relaxed">A Casa Smart Shop está sendo construída também a partir de experiências reais com dispositivos de casa inteligente.

    Acreditamos que uma recomendação fica muito mais útil quando conseguimos mostrar como determinado equipamento funciona no mundo real, quais são seus pontos positivos, onde estão suas limitações e em quais situações ele realmente pode facilitar a rotina.

    Por isso, à medida que novos dispositivos forem testados, eles também passam a fazer parte dos conteúdos publicados aqui.

    Nosso objetivo é construir, com o tempo, uma biblioteca cada vez maior de <strong>reviews e experiências reais com produtos de Smart Home</strong>.</p>

    <h2 class="text-2xl font-semibold my-2">E os links para as lojas?</h2>

    <p class="text-lg leading-relaxed">A Casa Smart Shop participa de programas de afiliados de lojas e marketplaces.

    Isso significa que alguns links presentes nos artigos podem ser links de afiliado. Quando você realiza uma compra por meio deles, podemos receber uma comissão, <strong>sem que isso represente um custo adicional para você</strong>.

    Essa é uma das formas utilizadas para manter o projeto funcionando e continuar produzindo novos conteúdos.

    A existência de uma comissão, porém, não significa que todos os produtos serão recomendados.

    Um produto pode ser apresentado como uma boa opção para determinado perfil e, ao mesmo tempo, não ser a melhor escolha para outra pessoa.

    Nosso objetivo é apresentar as informações de forma transparente para que <strong>a decisão final seja sempre sua</strong>.</p>

   <h2 class="text-2xl font-semibold my-2">Quem está por trás da Casa Smart Shop?</h2>

    <p class="text-lg leading-relaxed">A Casa Smart Shop é um projeto independente criado por <strong>Maicol Menezes</strong>, com o objetivo de compartilhar conhecimento sobre tecnologia, dispositivos inteligentes e automação residencial.

    O projeto também funciona como um espaço para experimentar, pesquisar e aprender cada vez mais sobre o universo de Smart Home.

    Por isso, a Casa Smart Shop está em constante evolução.

    Novos dispositivos, testes, comparativos e tutoriais serão adicionados ao longo do tempo conforme novas experiências e oportunidades surgirem.</p>

   <h2 class="text-2xl font-semibold my-2">Nosso compromisso</h2>

    <p class="text-lg leading-relaxed">Queremos que você consiga entrar na Casa Smart Shop com uma dúvida e sair sabendo um pouco mais sobre o assunto.

    Seja para descobrir qual lâmpada inteligente comprar, entender a diferença entre tipos de interruptores, escolher um robô aspirador ou simplesmente descobrir o que é possível automatizar em casa, nossa proposta é oferecer conteúdo <strong>claro, útil e fácil de colocar em prática</strong>.

    Não queremos complicar a tecnologia.

    Queremos mostrar que uma casa inteligente pode começar com uma única lâmpada, um interruptor ou uma tomada — e evoluir aos poucos, de acordo com as necessidades e o orçamento de cada pessoa.

    <strong>Seja bem-vindo à Casa Smart Shop.</strong>

    Explore nossos guias, descubra novos dispositivos e encontre as tecnologias que realmente podem fazer diferença na sua casa.</p>
</div>
</div>

@endsection