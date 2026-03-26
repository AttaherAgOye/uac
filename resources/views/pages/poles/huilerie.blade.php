@extends('layouts.app')

@section('title', 'Huilerie - Transformation de Coton')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/poles/huillerie/img1.jpeg') }}" alt="Huilerie" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
        {{-- Garantir la présence du vert avec des opacités explicites et un mélange --}}
        <div class="absolute inset-0 bg-gradient-to-br from-[#0D3B12]/90 via-[#1B5E20]/70 to-[#0D3B12]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-transparent to-transparent opacity-90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    </div>
    
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10 translate-y-[2px]">
        <svg class="relative block w-full h-[30px] sm:h-[50px] md:h-[80px] lg:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,93.81,104.3,88.4,156.4,79.52c55.3-9.4,110.6-21.4,165-23.08Z" fill="#ffffff"></path>
        </svg>
    </div>

    {{-- Floating decorative shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none hidden sm:block">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-yellow-400/15 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/10 rounded-full blur-2xl animate-float-reverse"></div>
        {{-- Dotted pattern --}}
        <div class="absolute top-1/4 right-[25%] grid grid-cols-4 gap-3 opacity-30">
            @for($i = 0; $i < 12; $i++)
                <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
            @endfor
        </div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 sm:mt-0">
        <a href="{{ route('poles') }}" class="group inline-flex items-center gap-2 text-white/70 hover:text-white text-sm mb-6 sm:mb-8 transition-colors"
           :class="['transition-all duration-500', loaded ? 'opacity-100' : 'opacity-0']">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Retour aux pôles
        </a>
        <div class="max-w-3xl">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-1.5 sm:py-2 glass rounded-full text-[11px] sm:text-sm font-medium text-white/90 mb-4 sm:mb-6">
                    <span class="w-1.5 sm:w-2 h-1.5 sm:h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                    Pôle 5 — Transformation
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Huilerie & <span class="text-yellow-400">Dérivés</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Industrie de transformation de la graine de coton. Production d'huile alimentaire de haute qualité, de produits cosmétiques et de tourteaux pour l'élevage.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME NAVIGATION --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="bg-white sticky top-20 z-30 border-b border-gray-100 shadow-sm" x-data="{ active: 'alimentaire' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto gap-1 py-3 scrollbar-hide">
            @foreach(['alimentaire' => 'Huile & Margarine', 'cosmetiques' => 'Cosmétiques & Savons', 'tourteaux' => 'Tourteaux & Bétail'] as $key => $label)
                <a href="#{{ $key }}" class="px-6 py-2.5 rounded-xl text-sm font-bold whitespace-nowrap transition-all duration-300"
                   :class="active === '{{ $key }}' ? 'bg-yellow-100 text-yellow-800 shadow-sm' : 'text-gray-500 hover:bg-yellow-50 hover:text-yellow-700'"
                   @click="active = '{{ $key }}'">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME HUILE & MARGARINE --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="alimentaire" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[5%] w-64 h-64 bg-yellow-100/30 rounded-full blur-3xl animate-float"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-yellow-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-yellow-400"></span>
                Alimentaire
                <span class="w-8 h-px bg-yellow-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Huile & Margarine</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto mt-4">Une excellente huile alimentaire légère et savoureuse, idéale pour la cuisine et l'industrie alimentaire.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-yellow-200 hover:-translate-y-1 transition-all duration-500 group"
                 x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                <span class="text-5xl mb-4 block">🍳</span>
                <h3 class="text-2xl font-extrabold text-gray-900 mt-2 mb-4 group-hover:text-yellow-700 transition-colors">Huile Raffinée de Coton</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Huile de très haute qualité, raffinée pour offrir un goût neutre et une tolérance à haute température. Parfaite pour la friture et l'assaisonnement.</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Riche en Oméga-6', 'Sans cholestérol', 'Vitamine E', 'Légère'] as $benefit)
                        <span class="px-3 py-1.5 bg-yellow-100/50 text-yellow-800 rounded-full text-sm font-bold border border-yellow-200/50">{{ $benefit }}</span>
                    @endforeach
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-yellow-200 hover:-translate-y-1 transition-all duration-500 group"
                 x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-700 ease-out delay-100', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                <span class="text-5xl mb-4 block">🧈</span>
                <h3 class="text-2xl font-extrabold text-gray-900 mt-2 mb-4 group-hover:text-yellow-700 transition-colors">Margarines Végétales</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Produite à l'aide de notre huile de coton supérieure, notre margarine est une excellente alternative saine et onctueuse pour la pâtisserie et la tartine.</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['100% Végétale', 'Onctueuse', 'Cuisson & Tartine', 'Longue conservation'] as $benefit)
                        <span class="px-3 py-1.5 bg-yellow-100/50 text-yellow-800 rounded-full text-sm font-bold border border-yellow-200/50">{{ $benefit }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME COSMÉTIQUES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="cosmetiques" class="py-16 sm:py-20 lg:py-28 bg-orange-50/30 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-orange-300/40 to-transparent"></div>
    
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-80 h-80 bg-orange-100/40 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-orange-400"></span>
                Soins Naturels
                <span class="w-8 h-px bg-orange-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Cosmétiques & Savons</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto mt-4">L'huile de coton est prisée dans l'industrie cosmétique pour ses vertus hydratantes, antioxydantes et apaisantes.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative">
                    <img src="{{ asset('images/pages/poles/huillerie/img3.jpeg') }}" alt="Produits cosmétiques" class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white text-2xl font-bold">Un savoir-faire industriel</h3>
                    </div>
                </div>
            </div>

            <div class="space-y-6" x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-100/50 flex gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 shrink-0 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 text-2xl">🧼</div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Savons d'excellence</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Fabrication de savons de ménage et de toilette durables, moussants tout en protégeant les peaux sensibles.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-100/50 flex gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 shrink-0 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 text-2xl">🧴</div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Crèmes et Soins</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Formulas riches en acide linoléique : nourrit intensément, prévient le vieillissement cutané, apporte douceur et protection.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME TOURTEAUX --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="tourteaux" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[120px] translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-emerald-400"></span>
                Alimentation Animale
                <span class="w-8 h-px bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">Tourteaux de Coton</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto mt-4">Le sous-produit premium de l'extraction, fournissant la base protéique la plus fiable pour l'élevage intensif.</p>
        </div>

        <div class="bg-emerald-50/50 rounded-[2.5rem] p-8 sm:p-12 border border-emerald-100 overflow-hidden relative shadow-inner"
             x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-1000', v ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
            
            <div class="grid md:grid-cols-2 gap-12 items-center relative z-10">
                <div>
                    <h3 class="text-3xl font-extrabold text-gray-900 mb-6">Un atout majeur pour votre bétail</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Les tourteaux issus de notre huilerie sont riches en protéines brutes et en fibres. Ils sont directement valorisés par notre pôle Nutrition Animale et vendus en gros pour stimuler la production de viande et de lait dans la sous-région.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-5 border border-emerald-100/50 shadow-sm">
                            <span class="text-3xl mb-2 block">🐄</span>
                            <span class="block font-bold text-gray-900 mb-1">Ruminants</span>
                            <span class="text-sm text-gray-500">Améliore la production laitière</span>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-emerald-100/50 shadow-sm">
                            <span class="text-3xl mb-2 block">🐂</span>
                            <span class="block font-bold text-gray-900 mb-1">Engraissement</span>
                            <span class="text-sm text-gray-500">Gains de poids accélérés</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="{{ asset('images/pages/poles/huillerie/img2.jpeg') }}" alt="Graines de coton" class="rounded-3xl shadow-2xl object-cover h-[400px] w-full">
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl border border-gray-100 animate-float">
                        <span class="text-sm font-bold text-emerald-600 uppercase tracking-wider block mb-1">Taux de protéine</span>
                        <span class="text-3xl font-extrabold text-gray-900">> 40%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CTA --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative py-16 sm:py-20 lg:py-28 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute inset-0 bg-gradient-to-br from-yellow-700 via-yellow-600 to-yellow-800"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[10%] w-80 h-80 bg-white/10 rounded-full blur-[100px] animate-float"></div>
        <div class="absolute bottom-1/4 left-[10%] w-64 h-64 bg-white/5 rounded-full blur-[80px] animate-float-reverse"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10"
         :class="['transition-all duration-1000', v ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 leading-tight">
            Intéressé par <span class="text-yellow-200">nos produits</span> dérivés ?
        </h2>
        <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">Contactez-nous pour toute commande en gros ou détail (huile, savons, margarines ou tourteaux).</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}?type=commande" class="group inline-flex items-center gap-3 px-10 py-5 bg-white hover:bg-yellow-50 text-yellow-800 font-bold rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-white/20 hover:-translate-y-1 text-lg">
                Commander
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('contact') }}?type=partenariat" class="group inline-flex items-center gap-3 px-10 py-5 bg-yellow-800/50 hover:bg-yellow-800 text-white font-bold rounded-2xl transition-all duration-300 border border-yellow-600/50 hover:-translate-y-1 text-lg">
                Demande de Partenariat
            </a>
        </div>
    </div>
</section>

@endsection
