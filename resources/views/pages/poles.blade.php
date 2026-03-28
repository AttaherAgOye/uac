@extends('layouts.app')

@section('title', 'Nos Pôles d\'Activités')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/img3.jpeg') }}" alt="Nos Pôles" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
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
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
        {{-- Dotted pattern --}}
        <div class="absolute top-1/4 right-[25%] grid grid-cols-4 gap-3 opacity-20">
            @for($i = 0; $i < 12; $i++)
                <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
            @endfor
        </div>
    </div>
    
    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 sm:mt-0">
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-1.5 sm:py-2 glass rounded-full text-[11px] sm:text-sm font-medium text-white/90 mb-4 sm:mb-6">
                    <span class="w-1.5 sm:w-2 h-1.5 sm:h-2 rounded-full bg-accent animate-pulse"></span>
                    Nos Activités
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nos Pôles <span class="text-accent">d'Activités</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Cinq secteurs stratégiques au service du développement économique du Mali.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 1 — Nutrition Animale --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[-5%] w-64 h-64 bg-emerald-100/30 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-emerald-50/50 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center shadow-lg shadow-emerald-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-emerald-600 uppercase tracking-widest">Pôle 1</span>
                        <span class="block text-xs text-gray-400">Usine d’Aliments Complets (UAC)</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Nutrition <span class="text-emerald-600">Animale</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    Nous produisons des aliments complets conçus pour améliorer la performance des élevages avec une production industrielle maîtrisée, de la matière première au produit fini.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Le laboratoire intervient à chaque étape du processus. De l’analyse des matières premières jusqu’à la validation des produits finis, nous garantissons la qualité et les performances nutritionnelles.
                </p>
                <div class="flex flex-wrap gap-2 mb-8">
                    @foreach(['Volailles', 'Bovins', 'Ovins & Caprins', 'Équidés', 'Aquaculture'] as $tag)
                        <span class="px-4 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-sm font-semibold border border-emerald-100">{{ $tag }}</span>
                    @endforeach
                </div>
                <a href="{{ route('poles.nutrition') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-emerald-600/20 hover:-translate-y-1">
                    Voir la gamme complète
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/poles/nutrition animal.jpeg') }}" alt="Nutrition Animale" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-emerald-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-emerald-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 2 — Transport Routier --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-400/40 to-transparent"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-72 h-72 bg-blue-100/30 rounded-full blur-3xl animate-float" style="animation-delay: -1s;"></div>
        <div class="absolute bottom-1/4 left-[-5%] w-64 h-64 bg-blue-50/50 rounded-full blur-3xl animate-float-reverse"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="order-2 lg:order-1"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/poles/transport et logistique.jpeg') }}" alt="Transport Routier" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg" style="background:#2563eb">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest" style="color:#2563eb">Pôle 2</span>
                        <span class="block text-xs text-gray-400">Continuité de votre activité</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Transport <span style="color:#2563eb">Routier</span></h2>
                <div class="h-1 w-16 rounded-full mb-6" style="background:#2563eb"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Forts de notre expérience, nous avons structuré une organisation reposant sur des équipes capables de gérer les exigences du transport moderne avec rigueur à l'échelle nationale et internationale.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Camions de 18 tonnes', 'Semi-remorques', 'Camions frigorifiques', 'Plateaux', 'Porte-engins', 'Remorques surbaissées'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-white rounded-xl border border-gray-100">
                            <svg class="w-5 h-5 shrink-0" style="color:#2563eb" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('poles.transport') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-1" style="background:#2563eb">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 3 — Logistique --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[-5%] w-64 h-64 bg-indigo-100/30 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-indigo-50/50 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg" style="background:#4f46e5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest" style="color:#4f46e5">Pôle 3</span>
                        <span class="block text-xs text-gray-400">Exécution sans faille</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight"><span style="color:#4f46e5">Logistique</span></h2>
                <div class="h-1 w-16 rounded-full mb-6" style="background:#4f46e5"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    La logistique est au cœur de notre performance. Nous avons mis en place des règles précises pour garantir une gestion fluide et rigoureuse des marchandises.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Nous structurons vos flux pour sécuriser vos opérations avec des installations avancées adaptées à chaque activité.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Stockage optimisé', 'Manutention maîtrisée', 'Conditionnement', 'Organisation avancée'] as $type)
                        <div class="flex items-center gap-2 p-3 rounded-xl border" style="background:#eef2ff; border-color:#c7d2fe">
                            <svg class="w-5 h-5 shrink-0" style="color:#4f46e5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('poles.logistique') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-1" style="background:#4f46e5">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            <div :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/img5.jpeg') }}" alt="Logistique" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-indigo-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-indigo-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 4 — Véhicules --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-amber-400/40 to-transparent"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-72 h-72 bg-amber-100/30 rounded-full blur-3xl animate-float" style="animation-delay: -1s;"></div>
        <div class="absolute bottom-1/4 left-[-5%] w-64 h-64 bg-amber-50/50 rounded-full blur-3xl animate-float-reverse"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="order-2 lg:order-1"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl bg-gray-200 flex items-center justify-center">
                        <img src="{{ asset('images/pages/img6.jpeg') }}" alt="Vente de Véhicules" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-amber-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-amber-100 rounded-2xl -z-10"></div>
                </div>
            </div>
            <div class="order-1 lg:order-2"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center shadow-lg shadow-amber-500/20">
                         <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-widest">Pôle 4</span>
                        <span class="block text-xs text-gray-400">Solutions professionnelles</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Vente de <span class="text-amber-600">Véhicules</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-amber-500 to-amber-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Des solutions adaptées aux besoins professionnels et industriels.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Véhicules Utilitaires', 'Camions Industriels', 'Véhicules Spécialisés', 'Solutions Logistiques'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-white rounded-xl border border-gray-100">
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('poles.vehicules') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-amber-600/20 hover:-translate-y-1">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 5 — Hydrocarbures --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[-5%] w-64 h-64 bg-red-100/30 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-red-50/50 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg shadow-red-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-red-600 uppercase tracking-widest">Pôle 5</span>
                        <span class="block text-xs text-gray-400">Au service de la mobilité</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Distribution d'<span class="text-red-600">Hydrocarbures</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-red-500 to-red-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    Une expérience complète ! Nous accompagnons chaque trajet. Au-delà de la distribution de carburant de haute qualité, nous proposons des services complémentaires.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Nos espaces permettent d'améliorer l’expérience de nos clients en offrant un moment pour se rafraîchir et accéder à des produits essentiels. L'espace attend bientôt ses images !
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Carburant de qualité', 'Entretien automobile', 'Lavage de véhicules', 'Boutique de proximité'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-red-50/50 rounded-xl border border-red-100/50">
                            <svg class="w-5 h-5 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('poles.hydrocarbures') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-red-600 hover:bg-red-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-red-600/20 hover:-translate-y-1">
                    En savoir plus
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl bg-gray-200 flex items-center justify-center">
                        <img src="{{ asset('images/pages/poles/hydrocarbure.jpeg') }}" alt="Hydrocarbures" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-red-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-red-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 6 — Huilerie --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-yellow-400/40 to-transparent"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-72 h-72 bg-yellow-100/30 rounded-full blur-3xl animate-float" style="animation-delay: -1s;"></div>
        <div class="absolute bottom-1/4 left-[-5%] w-64 h-64 bg-yellow-50/50 rounded-full blur-3xl animate-float-reverse"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="order-2 lg:order-1"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/poles/huillerie/img1.jpeg') }}" alt="Huilerie" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-yellow-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-yellow-100 rounded-2xl -z-10"></div>
                </div>
            </div>
            <div class="order-1 lg:order-2"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center shadow-lg shadow-yellow-600/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-yellow-700 uppercase tracking-widest">Pôle 6</span>
                        <span class="block text-xs text-gray-400">Transformation de graine de coton</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight"><span class="text-yellow-700">Huilerie</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-yellow-600 to-yellow-800 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    Nous valorisons chaque ressource. À partir de la graine de coton, nous produisons une huile alimentaire légère et adaptée aux exigences de l’industrie moderne, ainsi qu'à la cosmétique.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Après extraction, la matière résiduelle est transformée en tourteaux de coton, un aliment riche et performant destiné au bétail. Rien n’est perdu !
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Huile alimentaire', 'Marguerines', 'Cosmétique / Savons', 'Tourteaux de coton'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-white rounded-xl border border-gray-100">
                             <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('poles.huilerie') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-yellow-700 hover:bg-yellow-800 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-yellow-700/20 hover:-translate-y-1">
                    En savoir plus
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative py-16 sm:py-20 lg:py-28 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary-dark"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[10%] w-80 h-80 bg-accent/10 rounded-full blur-[100px] animate-float"></div>
        <div class="absolute bottom-1/4 left-[10%] w-64 h-64 bg-white/5 rounded-full blur-[80px] animate-float-reverse"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10"
         :class="['transition-all duration-1000', v ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 leading-tight">
            Besoin d'un <span class="text-accent">partenaire fiable</span> ?
        </h2>
        <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto">
            Contactez-nous pour discuter de vos besoins en nutrition animale, transport, véhicules, hydrocarbures ou huilerie.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}" class="group px-10 py-5 bg-accent hover:bg-accent-dark text-primary-dark font-bold rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-accent/30 hover:-translate-y-1 inline-flex items-center gap-3 text-lg">
                Nous Contacter
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('partenaires') }}" class="px-10 py-5 glass hover:bg-white/15 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-1 text-lg">
                Devenir Partenaire
            </a>
        </div>
    </div>
</section>

@endsection
