@extends('layouts.app')

@section('title', 'Nutrition Animale - Bu Duman')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0">
        <img src="{{ asset('images/pages/img4.jpeg') }}" alt="Nutrition Animale" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/95 via-emerald-800/85 to-emerald-900/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    </div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('poles') }}" class="group inline-flex items-center gap-2 text-white/50 hover:text-white text-sm mb-8 transition-colors"
           :class="['transition-all duration-500', loaded ? 'opacity-100' : 'opacity-0']">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Retour aux pôles
        </a>
        <div class="max-w-3xl">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-5 py-2 glass rounded-full text-sm font-medium text-white/90 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Pôle 1 — Bu Duman
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nutrition <span class="text-accent">Animale</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Production industrielle d'aliments complets et sécurisés. Usine d'Aliments Complets (UAC) avec laboratoire intégré.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GAMME NAVIGATION --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="bg-white sticky top-20 z-30 border-b border-gray-100 shadow-sm" x-data="{ active: 'volaille' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto gap-1 py-3 scrollbar-hide">
            @foreach(['volaille' => 'Gamme Volaille', 'betail' => 'Gamme Bétail', 'poisson' => 'Gamme Poisson'] as $key => $label)
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
{{-- GAMME VOLAILLE --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="volaille" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
<section id="betail" class="py-24 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-emerald-300/40 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
<section id="poisson" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-50 rounded-full blur-[120px] translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
<section class="relative py-28 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
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
