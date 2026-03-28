@extends('layouts.app')

@section('title', 'Nutrition Animale - Bu Duman')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/img4.jpeg') }}" alt="Nutrition Animale" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
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
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/15 rounded-full blur-3xl animate-float"></div>
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
                    <span class="w-1.5 sm:w-2 h-1.5 sm:h-2 rounded-full bg-accent animate-pulse"></span>
                    Pôle 1 — Bu Duman
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nutrition <span class="text-accent">Animale</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Production industrielle d'aliments complets et sécurisés. Usine d'Aliments Complets (UAC) avec laboratoire intégré.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME NAVIGATION --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="bg-white sticky top-20 z-30 border-b border-gray-100 shadow-sm" x-data="{ active: 'processus' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto gap-1 py-3 scrollbar-hide">
            @foreach(['processus' => 'Notre Processus', 'volaille' => 'Gamme Volaille', 'betail' => 'Gamme Bétail', 'poisson' => 'Gamme Poisson'] as $key => $label)
                <a href="#{{ $key }}" class="px-6 py-2.5 rounded-xl text-sm font-bold whitespace-nowrap transition-all duration-300"
                   :class="active === '{{ $key }}' ? 'bg-emerald-100 text-emerald-700 shadow-sm' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600'"
                   @click="active = '{{ $key }}'">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PROCESSUS DE PRODUCTION --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="processus" class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-emerald-400"></span>
                Savoir-faire Industriel
                <span class="w-8 h-px bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Processus de Production</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto mt-4">La qualité de nos gammes d'aliments Bu Duman repose sur un processus industriel rigoureux et certifié.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @php
                $steps = [
                    ['title' => '1. Réception', 'desc' => 'Réception et stockage sécurisé des intrants.', 'icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z'],
                    ['title' => '2. Dosage', 'desc' => 'Mesure précise des ingrédients.', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                    ['title' => '3. Broyage', 'desc' => 'Broyage pour une granulométrie optimale.', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['title' => '4. Mélange', 'desc' => 'Homogénéisation parfaite des composants.', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                    ['title' => '5. Granulation', 'desc' => 'Pressage en granulés (pelletisation).', 'icon' => 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5'],
                    ['title' => '6. Refroidissement', 'desc' => 'Stabilisation de la température.', 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'],
                    ['title' => '7. Émiettage', 'desc' => 'Adaptation de la taille (selon besoin).', 'icon' => 'M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0 1.172 1.953 1.172 5.119 0 7.072z'],
                    ['title' => '8. Ensachage', 'desc' => 'Conditionnement qualitatif et pesée.', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                ];
            @endphp
            @foreach($steps as $index => $step)
                <div class="bg-white rounded-2xl p-6 border border-emerald-100 hover:shadow-lg transition-all"
                     x-data="{ v: false }" x-intersect:enter="v = true"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
                     style="transition-delay: {{ $index * 50 }}ms">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">{{ $step['title'] }}</h3>
                    <p class="text-gray-500 text-sm">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-emerald-600 rounded-3xl p-8 sm:p-10 text-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true" :class="['transition-all duration-700', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <h3 class="text-2xl font-bold mb-4 relative z-10">Laboratoire de Contrôle</h3>
                <p class="text-emerald-50 leading-relaxed relative z-10">
                    Notre laboratoire moderne, équipé du NIRS DS 2500, est le seul certifié dans la sous-région. Il garantit la qualité à 100% de la réception des matières premières jusqu'au produit fini, par des tests microbiologiques rigoureux.
                </p>
            </div>
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-emerald-100 shadow-sm" x-data="{ v: false }" x-intersect:enter="v = true" :class="['transition-all duration-700', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Notre Équipe experte</h3>
                <p class="text-gray-600 leading-relaxed">
                    Composée de vétérinaires spécialisés, zootechniciens, et ingénieurs nutritionnistes, notre équipe assure non seulement la formulation de produits haute performance, mais également un accompagnement et un Service Après-Vente de proximité pour les éleveurs.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME VOLAILLE --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="volaille" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[5%] w-64 h-64 bg-emerald-100/30 rounded-full blur-3xl animate-float"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-emerald-400"></span>
                Bu Duman
                <span class="w-8 h-px bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Gamme Volaille</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @php
                $volaille = [
                    ['name' => 'Poussins Démarrage (PD)', 'icon' => '🐣', 'energy' => '3000-3200 Kcal', 'protein' => '21-22%', 'usage' => 'Du 1er jour à 21 jours (800g poids vif)', 'benefits' => ['Croissance rapide', 'Uniformité du lot', 'Renforcement immunitaire', 'Adapté climat tropical']],
                    ['name' => 'Poulettes Futures Pondeuses (PFP)', 'icon' => '🐔', 'energy' => '3000-3200 Kcal', 'protein' => '18-22%', 'usage' => 'De 29 jours à 16 semaines (350g à 1200g)', 'benefits' => ['Développement harmonieux', 'Préparation optimale ponte', 'Solidité osseuse']],
                    ['name' => 'Pondeuses Intensives (PI)', 'icon' => '🥚', 'energy' => '2600-2800 Kcal', 'protein' => '15-17%', 'usage' => 'Dès le point de ponte', 'benefits' => ['Coquille solide', 'Production régulière', 'Rentabilité optimisée']],
                    ['name' => 'Chair Finition (CF)', 'icon' => '🍗', 'energy' => '2900-3000 Kcal', 'protein' => '17-20%', 'usage' => 'À partir de 22 jours jusqu\'à abattage', 'benefits' => ['Croissance rapide', 'Meilleur indice conversion', 'Rendement carcasse optimisé']],
                ];
            @endphp

            @foreach($volaille as $index => $product)
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-500 group"
                     x-data="{ v: false }" x-intersect:enter="v = true"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
                     style="transition-delay: {{ $index * 100 }}ms">
                    <div class="flex items-start justify-between mb-5">
                        <div>
                            <span class="text-4xl">{{ $product['icon'] }}</span>
                            <h3 class="text-xl font-extrabold text-gray-900 mt-3 group-hover:text-emerald-700 transition-colors">{{ $product['name'] }}</h3>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="bg-white rounded-2xl p-4 border border-gray-100">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Énergie</span>
                            <span class="block text-sm font-extrabold text-emerald-600 mt-1">{{ $product['energy'] }}</span>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-gray-100">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Protéines</span>
                            <span class="block text-sm font-extrabold text-emerald-600 mt-1">{{ $product['protein'] }}</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-5"><span class="font-bold text-gray-700">Utilisation :</span> {{ $product['usage'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($product['benefits'] as $benefit)
                            <span class="px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold border border-emerald-100">{{ $benefit }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME BÉTAIL --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="betail" class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-emerald-300/40 to-transparent"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-80 h-80 bg-emerald-100/40 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-emerald-400"></span>
                Bu Duman
                <span class="w-8 h-px bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Gamme Bétail</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $betail = [
                    ['name' => 'Bovins Intensifs (BI)', 'icon' => '🐄', 'protein' => '15-18%', 'ufl' => '0.8-0.9', 'benefits' => ['Gain de poids rapide', 'Optimisation coûts', 'Santé digestive']],
                    ['name' => 'Vaches Laitières (VLI)', 'icon' => '🐄', 'protein' => '16-18%', 'ufl' => '≈ 0.9', 'benefits' => ['Production laitière accrue', 'Qualité du lait', 'Ration équilibrée']],
                    ['name' => 'Ovins-Caprins (OCI)', 'icon' => '🐐', 'protein' => '13-15%', 'ufl' => '0.8', 'benefits' => ['Croissance homogène', 'Adapté embouche', 'Bonne conversion']],
                    ['name' => 'Aliments Équins (AEI)', 'icon' => '🐴', 'protein' => '13-15%', 'ufl' => '0.8', 'benefits' => ['Endurance', 'Vitalité', 'Performance']],
                    ['name' => 'Tous Ruminants (TR)', 'icon' => '🐄', 'protein' => '13-15%', 'ufl' => '0.8', 'benefits' => ['Polyvalent', 'Équilibré', 'Élevages mixtes']],
                ];
            @endphp

            @foreach($betail as $index => $product)
                <div class="bg-white rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-500"
                     x-data="{ v: false }" x-intersect:enter="v = true"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
                     style="transition-delay: {{ $index * 80 }}ms">
                    <span class="text-4xl">{{ $product['icon'] }}</span>
                    <h3 class="text-lg font-extrabold text-gray-900 mt-3 mb-5">{{ $product['name'] }}</h3>
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="bg-gray-50 rounded-2xl p-3">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Protéines</span>
                            <span class="block text-sm font-extrabold text-emerald-600 mt-1">{{ $product['protein'] }}</span>
                        </div>
                        <div class="bg-gray-50 rounded-2xl p-3">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">UFL</span>
                            <span class="block text-sm font-extrabold text-emerald-600 mt-1">{{ $product['ufl'] }}</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach($product['benefits'] as $benefit)
                            <span class="px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold border border-emerald-100">{{ $benefit }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME POISSON --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="poisson" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-50 rounded-full blur-[120px] translate-y-1/2"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[10%] w-64 h-64 bg-blue-100/30 rounded-full blur-3xl animate-float"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-blue-400"></span>
                Bu Duman
                <span class="w-8 h-px bg-blue-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">Gamme Poisson</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">Nutrition aquacole sécurisée, conçue pour répondre aux exigences de l'aquaculture en milieu tropical.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @php
                $poisson = [
                    ['name' => 'Démarrage Poisson (ADP)', 'icon' => '🐟', 'protein' => '40-45%', 'lipids' => '8-12%', 'target' => 'Alevins (0 à 30g)', 'benefits' => ['Croissance rapide', 'Haute digestibilité', 'Réduction pertes', 'Renforcement immunitaire']],
                    ['name' => 'Croissance Poisson (ACP)', 'icon' => '🐟', 'protein' => '30-35%', 'lipids' => '6-10%', 'target' => 'Poissons 30g à 200g', 'benefits' => ['Indice conversion optimisé', 'Bonne assimilation', 'Croissance régulière', 'Réduction rejets']],
                    ['name' => 'Finition Poisson (AFP)', 'icon' => '🐟', 'protein' => '25-30%', 'lipids' => '5-8%', 'target' => 'Poissons ≥ 200g', 'benefits' => ['Gain de poids rapide', 'Qualité de chair', 'Meilleur rendement', 'Optimisation coûts']],
                ];
            @endphp

            @foreach($poisson as $index => $product)
                <div class="bg-blue-50/50 rounded-3xl p-8 border border-blue-100 hover:shadow-xl hover:border-blue-200 hover:-translate-y-1 transition-all duration-500"
                     x-data="{ v: false }" x-intersect:enter="v = true"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
                     style="transition-delay: {{ $index * 100 }}ms">
                    <span class="text-4xl">{{ $product['icon'] }}</span>
                    <h3 class="text-lg font-extrabold text-gray-900 mt-3 mb-2">{{ $product['name'] }}</h3>
                    <p class="text-sm text-blue-600 font-bold mb-5">{{ $product['target'] }}</p>
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="bg-white rounded-2xl p-3 border border-blue-50">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Protéines</span>
                            <span class="block text-sm font-extrabold text-blue-600 mt-1">{{ $product['protein'] }}</span>
                        </div>
                        <div class="bg-white rounded-2xl p-3 border border-blue-50">
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Lipides</span>
                            <span class="block text-sm font-extrabold text-blue-600 mt-1">{{ $product['lipids'] }}</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach($product['benefits'] as $benefit)
                            <span class="px-3 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-bold border border-blue-200/50">{{ $benefit }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CTA --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative py-16 sm:py-20 lg:py-28 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-700 via-emerald-600 to-emerald-800"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[10%] w-80 h-80 bg-accent/10 rounded-full blur-[100px] animate-float"></div>
        <div class="absolute bottom-1/4 left-[10%] w-64 h-64 bg-white/5 rounded-full blur-[80px] animate-float-reverse"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10"
         :class="['transition-all duration-1000', v ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 leading-tight">
            Besoin de conseils sur nos <span class="text-accent">produits</span> ?
        </h2>
        <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto">Notre équipe commerciale est à votre disposition pour vous accompagner dans le choix des meilleurs aliments pour vos élevages.</p>
        <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 px-10 py-5 bg-accent hover:bg-accent-dark text-primary-dark font-bold rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-accent/30 hover:-translate-y-1 text-lg">
            Contacter notre équipe
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

@endsection
