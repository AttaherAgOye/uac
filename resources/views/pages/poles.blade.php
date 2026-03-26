@extends('layouts.app')

@section('title', 'Nos Pôles d\'Activités')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0">
        <img src="{{ asset('images/pages/img3.jpeg') }}" alt="Nos Pôles" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-dark/95 via-primary/85 to-primary-dark/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    </div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-5 py-2 glass rounded-full text-sm font-medium text-white/90 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Nos Activités
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nos Pôles <span class="text-accent">d'Activités</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Quatre secteurs stratégiques au service du développement économique du Mali.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 1 — Nutrition Animale --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center shadow-lg shadow-emerald-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-emerald-600 uppercase tracking-widest">Pôle 1</span>
                        <span class="block text-xs text-gray-400">UAC – Bu Duman</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Nutrition <span class="text-emerald-600">Animale</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    UAC est une unité industrielle spécialisée dans la fabrication d'aliments complets et sécurisés pour volailles, bovins, ovins & caprins, équidés et aquaculture.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Dotée d'équipements modernes et d'un laboratoire intégré, l'usine garantit un contrôle rigoureux à chaque étape du processus de production.
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
                        <img src="{{ asset('images/pages/img4.jpeg') }}" alt="Nutrition Animale" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-emerald-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-emerald-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 2 — Transport & Logistique --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-50 rounded-full blur-[120px] translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="order-2 lg:order-1"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/img5.jpeg') }}" alt="Transport & Logistique" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-blue-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-blue-100 rounded-2xl -z-10"></div>
                </div>
            </div>
            <div class="order-1 lg:order-2"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Pôle 2</span>
                        <span class="block text-xs text-gray-400">Flotte structurée</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Transport & <span class="text-blue-600">Logistique</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    UAC-IOD dispose d'un parc logistique adapté aux besoins des opérateurs économiques, couvrant le territoire national.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Citernes', 'Bennes remorques', 'Plateaux', 'Porteurs spécialisés'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-white rounded-xl border border-gray-100">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('poles.transport') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-blue-600/20 hover:-translate-y-1">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}?type=cotation" class="px-7 py-3.5 border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-2xl transition-all duration-300">
                        Demander une cotation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 3 — Vente de Véhicules --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-lg shadow-amber-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-widest">Pôle 3</span>
                        <span class="block text-xs text-gray-400">Solutions professionnelles</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Vente de <span class="text-amber-600">Véhicules</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-amber-500 to-orange-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Nous proposons des véhicules répondant aux exigences des entreprises et opérateurs économiques.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Véhicules utilitaires', 'Camions industriels', 'Véhicules spécialisés', 'Solutions logistiques'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-amber-50/50 rounded-xl border border-amber-100/50">
                            <svg class="w-5 h-5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700 text-sm font-semibold">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('poles.vehicules') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-amber-600/20 hover:-translate-y-1">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}?type=devis" class="px-7 py-3.5 border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white font-bold rounded-2xl transition-all duration-300">
                        Demander un devis
                    </a>
                </div>
            </div>
            <div :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/img6.jpeg') }}" alt="Vente de Véhicules" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-amber-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-amber-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PÔLE 4 — Hydrocarbures --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-50 rounded-full blur-[120px] translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="order-2 lg:order-1"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/img7.jpeg') }}" alt="Hydrocarbures" class="w-full h-[420px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-red-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-red-100 rounded-2xl -z-10"></div>
                </div>
            </div>
            <div class="order-1 lg:order-2"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center shadow-lg shadow-red-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-red-600 uppercase tracking-widest">Pôle 4</span>
                        <span class="block text-xs text-gray-400">Distribution sécurisée</span>
                    </div>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-3 leading-tight">Distribution d'<span class="text-red-600">Hydrocarbures</span></h2>
                <div class="h-1 w-16 bg-gradient-to-r from-red-500 to-rose-600 rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    UAC-IOD intervient dans la distribution de produits pétroliers avec une exigence forte en matière de sécurité et de conformité.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach(['Respect des normes', 'Approvisionnement fiable', 'Capacité maîtrisée', 'Logistique intégrée'] as $type)
                        <div class="flex items-center gap-2 p-3 bg-white rounded-xl border border-gray-100">
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
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CTA --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative py-28 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
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
            Contactez-nous pour discuter de vos besoins en nutrition animale, transport, véhicules ou hydrocarbures.
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
