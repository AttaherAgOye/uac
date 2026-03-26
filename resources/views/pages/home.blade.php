@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO SECTION — Full-screen immersive with floating elements --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative min-h-screen flex items-center overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        {{-- Image de fond avec une opacité réduite pour laisser le fond vert dominer --}}
        <img src="{{ asset('images/pages/hi/hero.jpeg') }}" alt="UAC-IOD" class="w-full h-full object-cover scale-105 opacity-50 mix-blend-luminosity">
        
        {{-- Filtres verts superposés pour un effet de marque très prononcé --}}
        <div class="absolute inset-0 bg-gradient-to-br from-primary-dark/90 via-primary/70 to-primary-dark/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-transparent to-transparent opacity-90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.15),_transparent_60%)]"></div>
    </div>

    {{-- Solid White Curve Transition --}}
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10 translate-y-[2px]">
        <svg class="relative block w-full h-[30px] sm:h-[50px] md:h-[80px] lg:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,93.81,104.3,88.4,156.4,79.52c55.3-9.4,110.6-21.4,165-23.08Z" fill="#ffffff"></path>
        </svg>
    </div>

    {{-- Floating decorative shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none hidden sm:block">
        <div class="absolute top-20 right-[15%] w-72 h-72 bg-accent/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-32 left-[10%] w-56 h-56 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
        <div class="absolute top-1/2 right-[5%] w-40 h-40 bg-accent/5 rounded-full blur-xl animate-pulse-soft"></div>
        {{-- Geometric accent lines --}}
        <div class="absolute top-1/4 right-0 w-64 h-px bg-gradient-to-l from-accent/30 to-transparent"></div>
        <div class="absolute bottom-1/3 left-0 w-48 h-px bg-gradient-to-r from-accent/20 to-transparent"></div>
        {{-- Dotted pattern --}}
        <div class="absolute top-24 left-[8%] grid grid-cols-5 gap-3 opacity-20">
            @for($i = 0; $i < 15; $i++)
                <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
            @endfor
        </div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-32 w-full mt-10 sm:mt-0">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            {{-- Left: Text content (Passes en bas sur mobile) --}}
            <div class="lg:col-span-7 flex flex-col items-center text-center lg:items-start lg:text-left order-2 lg:order-1 mt-6 lg:mt-0">
                {{-- Badge --}}
                <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                    <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-1.5 sm:py-2 glass rounded-full text-[11px] sm:text-sm font-medium text-white/90 mb-5 sm:mb-8">
                        <span class="w-1.5 sm:w-2 h-1.5 sm:h-2 rounded-full bg-accent animate-pulse"></span>
                        Groupe Industriel Multisectoriel
                    </span>
                </div>

                {{-- Heading --}}
                <div :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']" class="flex flex-col items-center lg:items-start w-full">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="UAC-IOD Logo" class="h-24 sm:h-32 lg:h-40 w-auto object-contain rounded-2xl shadow-xl bg-white/10 p-2 sm:p-3 mb-4 sm:mb-6 border border-white/20">
                    <div class="h-1 w-16 sm:w-24 bg-gradient-to-r from-accent to-accent-dark rounded-full mb-3 sm:mb-6"></div>
                    <p class="text-xl sm:text-3xl text-white font-semibold mb-4 sm:mb-2 tracking-wide uppercase">Groupe Industriel</p>
                </div>

                {{-- Description --}}
                <div :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <p class="text-sm sm:text-lg text-white/80 leading-relaxed mb-6 sm:mb-10 max-w-lg lg:max-w-xl">
                        Opérateur stratégique en nutrition animale, transport, logistique et hydrocarbures. Une vision de performance ancrée dans le développement durable.
                    </p>
                </div>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row flex-wrap justify-center lg:justify-start gap-3 sm:gap-4 w-full sm:w-auto" :class="['transition-all duration-700 delay-[450ms]', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <a href="{{ route('groupe') }}"
                       class="group px-6 sm:px-8 py-3.5 sm:py-4 bg-accent hover:bg-accent-dark text-primary-dark font-bold rounded-xl sm:rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-accent/30 hover:-translate-y-1 inline-flex items-center justify-center gap-3 w-full sm:w-auto text-sm sm:text-base">
                        <span>Découvrir le Groupe</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('poles') }}"
                       class="px-6 sm:px-8 py-3.5 sm:py-4 glass hover:bg-white/15 text-white font-semibold rounded-xl sm:rounded-2xl transition-all duration-300 hover:-translate-y-1 flex items-center justify-center gap-2 w-full sm:w-auto text-sm sm:text-base">
                        <span>Nos Activités</span>
                        <div class="w-1.5 h-1.5 rounded-full bg-white/50 group-hover:bg-accent transition-colors hidden sm:block"></div>
                    </a>
                    <a href="{{ route('contact') }}?type=devis"
                       class="group px-6 sm:px-8 py-3.5 sm:py-4 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold rounded-xl sm:rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg flex items-center justify-center gap-2 w-full sm:w-auto text-sm sm:text-base">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        <span>Commander / Devis</span>
                    </a>
                </div>
            </div>

            {{-- Right/Bottom: Stats cards (Apparaît en premier sur mobile) --}}
            <div class="lg:col-span-5 block w-full order-1 lg:order-2">
                <div class="relative w-full" :class="['transition-all duration-1000 delay-500', loaded ? 'opacity-100 lg:translate-x-0 translate-y-0' : 'opacity-0 lg:translate-x-12 translate-y-8']">
                    {{-- Main stat card --}}
                    <div class="glass rounded-2xl sm:rounded-3xl p-4 sm:p-8 relative z-10 shadow-2xl">
                        <div class="grid grid-cols-2 gap-3 sm:gap-6">
                            @php
                                $stats = [
                                    ['value' => '5', 'label' => 'Pôles d\'activités', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                                    ['value' => '100+', 'label' => 'Collaborateurs', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                                    ['value' => '10+', 'label' => 'Années d\'expérience', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                                    ['value' => 'Mali', 'label' => 'Couverture nationale', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                                ];
                            @endphp
                            @foreach($stats as $i => $stat)
                                <div class="text-center p-3 sm:p-4 rounded-xl sm:rounded-2xl bg-white/5 hover:bg-white/10 transition-colors duration-300">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-accent mx-auto mb-1.5 sm:mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $stat['icon'] }}"/></svg>
                                    <span class="block text-xl sm:text-2xl font-bold text-white">{{ $stat['value'] }}</span>
                                    <span class="text-[10px] sm:text-xs text-white/60 mt-0.5 sm:mt-1">{{ $stat['label'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- Accent decoration --}}
                    <div class="absolute -top-2 -right-2 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-24 sm:h-24 border-2 border-accent/30 rounded-2xl sm:rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-2 -left-2 sm:-bottom-3 sm:-left-3 w-12 h-12 sm:w-16 sm:h-16 bg-accent/20 rounded-xl sm:rounded-2xl -z-10 blur-md"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10">
        <a href="#about" class="flex flex-col items-center gap-2 text-white/40 hover:text-white/70 transition-colors group">
            <span class="text-xs tracking-widest uppercase">Défiler</span>
            <div class="w-6 h-10 border-2 border-current rounded-full flex items-start justify-center p-1.5">
                <div class="w-1.5 h-1.5 bg-current rounded-full animate-bounce"></div>
            </div>
        </a>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- ABOUT SECTION — Split layout with decorative accents --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="about" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    {{-- Subtle background pattern --}}
    <div class="absolute top-0 right-0 w-full lg:w-1/3 h-full bg-gradient-to-l from-gray-50 to-transparent"></div>
    <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-primary/3 rounded-full blur-3xl hidden md:block"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left: Image composition --}}
            <div :class="['transition-all duration-1000 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']" class="order-2 lg:order-1 mt-8 lg:mt-0">
                <div class="relative">
                    {{-- Main image --}}
                    <div class="rounded-2xl lg:rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/img2.jpeg') }}" alt="UAC-IOD Équipe" class="w-full h-[300px] sm:h-[400px] lg:h-[480px] object-cover">
                    </div>
                    {{-- Floating stat card --}}
                    <div class="absolute -bottom-6 sm:-bottom-8 -right-4 sm:-right-8 bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-xl border border-gray-100 w-[85%] sm:w-auto">
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-lg sm:rounded-xl bg-accent/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 sm:w-7 sm:h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </div>
                            <div>
                                <span class="text-xl sm:text-3xl font-extrabold text-primary-dark">10+</span>
                                <span class="block text-xs sm:text-sm text-gray-500">Années d'expérience</span>
                            </div>
                        </div>
                    </div>
                    {{-- Decorative elements --}}
                    <div class="absolute -top-4 -left-4 sm:-top-6 sm:-left-6 w-20 h-20 sm:w-28 sm:h-28 border-2 border-primary/15 rounded-2xl sm:rounded-3xl"></div>
                    <div class="absolute top-4 -left-2 sm:top-8 sm:-left-3 w-4 h-4 sm:w-6 sm:h-6 bg-accent/30 rounded-full"></div>
                </div>
            </div>

            {{-- Right: Content --}}
            <div :class="['transition-all duration-1000 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']" class="order-1 lg:order-2 text-center lg:text-left">
                <span class="inline-flex items-center justify-center lg:justify-start gap-2 text-accent font-semibold text-xs sm:text-sm uppercase tracking-widest mb-4">
                    <span class="w-6 sm:w-8 h-px bg-accent hidden sm:inline-block"></span>
                    À propos
                    <span class="w-6 sm:w-8 h-px bg-accent sm:hidden"></span>
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4 sm:mb-6 leading-tight">
                    Qui sommes<span class="text-accent">-</span>nous ?
                </h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-4 sm:mb-6">
                    UAC-IOD est un groupe industriel structuré autour d'activités stratégiques contribuant au développement économique national.
                </p>
                <p class="text-gray-500 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8">
                    Grâce à une approche rigoureuse, une gestion maîtrisée et une vision à long terme, le groupe s'impose progressivement comme un acteur fiable dans ses différents domaines d'intervention.
                </p>

                {{-- Quote --}}
                <div class="relative p-5 sm:p-6 bg-gradient-to-r from-primary/5 to-transparent rounded-xl sm:rounded-2xl border-l-4 border-accent mb-8 sm:mb-10 text-left">
                    <svg class="absolute top-3 right-3 sm:top-4 sm:right-4 w-6 h-6 sm:w-8 sm:h-8 text-primary/10" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/></svg>
                    <p class="text-primary-dark font-medium italic text-lg leading-relaxed">
                        "Notre ambition est simple : développer des activités solides, créatrices de valeur et adaptées aux réalités du marché malien."
                    </p>
                </div>

                {{-- Mini features --}}
                <div class="grid grid-cols-3 gap-4">
                    @php
                        $features = [
                            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'text' => 'Fiabilité'],
                            ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'text' => 'Performance'],
                            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'text' => 'Durabilité'],
                        ];
                    @endphp
                    @foreach($features as $f)
                        <div class="flex flex-col items-center gap-2 p-4 rounded-xl bg-gray-50 hover:bg-primary/5 transition-colors duration-300 group">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $f['icon'] }}"/></svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-700">{{ $f['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- POLES SECTION — Card grid with gradient overlays --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-72 h-72 bg-accent/4 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 left-[-5%] w-64 h-64 bg-primary/4 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -3s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Section header --}}
        <div class="text-center mb-12 sm:mb-16 lg:mb-20" :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-xs sm:text-sm uppercase tracking-widest mb-3 sm:mb-4">
                <span class="w-6 sm:w-8 h-px bg-accent"></span>
                Nos activités
                <span class="w-6 sm:w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-3 sm:mb-4">Nos Pôles d'Activités</h2>
            <p class="text-gray-500 text-base sm:text-lg max-w-2xl mx-auto px-4 sm:px-0">Cinq secteurs complémentaires au service du développement économique du Mali.</p>
        </div>

        {{-- Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 sm:gap-6">
            @php
                $poles = [
                    [
                        'title' => 'Nutrition Animale',
                        'subtitle' => 'UAC / Bu Duman',
                        'desc' => 'Production industrielle d\'aliments complets et sécurisés pour volailles, bétail et aquaculture.',
                        'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                        'route' => 'poles.nutrition',
                        'gradient' => 'from-emerald-500 to-green-600',
                        'bg' => 'bg-emerald-50',
                        'text' => 'text-emerald-600',
                        'img' => 'poles/nutrition animal.jpeg',
                    ],
                    [
                        'title' => 'Transport & Logistique',
                        'subtitle' => 'Flotte structurée',
                        'desc' => 'Solutions logistiques structurées : citernes, bennes, plateaux, porteurs spécialisés.',
                        'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
                        'route' => 'poles.transport',
                        'gradient' => 'from-blue-500 to-indigo-600',
                        'bg' => 'bg-blue-50',
                        'text' => 'text-blue-600',
                        'img' => 'poles/transport et logistique.jpeg',
                    ],
                    [
                        'title' => 'Vente de Véhicules',
                        'subtitle' => 'Solutions professionnelles',
                        'desc' => 'Commercialisation de véhicules adaptés aux besoins professionnels et industriels.',
                        'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        'route' => 'poles.vehicules',
                        'gradient' => 'from-amber-500 to-orange-600',
                        'bg' => 'bg-amber-50',
                        'text' => 'text-amber-600',
                        'img' => 'img6.jpeg',
                    ],
                    [
                        'title' => 'Hydrocarbures',
                        'subtitle' => 'Distribution sécurisée',
                        'desc' => 'Approvisionnement et distribution sécurisée de produits pétroliers.',
                        'icon' => 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z',
                        'route' => 'poles.hydrocarbures',
                        'gradient' => 'from-red-500 to-rose-600',
                        'bg' => 'bg-red-50',
                        'text' => 'text-red-600',
                        'img' => 'img3.jpeg',
                    ],
                    [
                        'title' => 'Huilerie',
                        'subtitle' => 'Transformation de coton',
                        'desc' => 'Industrie de transformation de graine de coton : huile alimentaire, cosmétiques et tourteaux.',
                        'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                        'route' => 'poles.huilerie',
                        'gradient' => 'from-yellow-600 to-yellow-800',
                        'bg' => 'bg-yellow-50',
                        'text' => 'text-yellow-700',
                        'img' => 'poles/huillerie/img1.jpeg',
                    ],
                ];
            @endphp

            @foreach($poles as $index => $pole)
                <a href="{{ route($pole['route']) }}"
                   class="group relative bg-white rounded-2xl lg:rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 lg:hover:-translate-y-3 border border-gray-100"
                   :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12']"
                   style="transition-delay: {{ ($index + 1) * 120 }}ms">
                    {{-- Card image --}}
                    <div class="h-36 sm:h-44 overflow-hidden relative">
                        <img src="{{ asset('images/pages/' . $pole['img']) }}" alt="{{ $pole['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        {{-- Icon badge --}}
                        <div class="absolute bottom-3 left-4">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-br {{ $pole['gradient'] }} flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $pole['icon'] }}"/></svg>
                            </div>
                        </div>
                    </div>
                    {{-- Card content --}}
                    <div class="p-5 sm:p-6">
                        <span class="text-[10px] sm:text-xs font-semibold {{ $pole['text'] }} uppercase tracking-wider">{{ $pole['subtitle'] }}</span>
                        <h3 class="text-base sm:text-lg font-bold text-gray-900 mt-1 mb-2 group-hover:text-primary transition-colors">{{ $pole['title'] }}</h3>
                        <p class="text-gray-500 text-xs sm:text-sm leading-relaxed">{{ $pole['desc'] }}</p>
                        {{-- Arrow --}}
                        <div class="mt-5 flex items-center gap-2 text-sm font-semibold {{ $pole['text'] }} opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                            <span>En savoir plus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('poles') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-primary hover:bg-primary-light text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-1">
                Découvrir toutes nos activités
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- ENGAGEMENTS SECTION — Dark with glass cards --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-primary-dark relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    {{-- Background effects --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/8 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary-light/10 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3"></div>
        {{-- Grid pattern overlay --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16" :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent/50"></span>
                Ce qui nous définit
                <span class="w-8 h-px bg-accent/50"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-4">Nos Engagements</h2>
            <p class="text-white/50 text-lg max-w-xl mx-auto">Les piliers qui guident chacune de nos actions et décisions.</p>
        </div>

        {{-- Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-5">
            @php
                $engagements = [
                    ['title' => 'Professionnalisme', 'desc' => 'Méthode et discipline', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['title' => 'Qualité & Sécurité', 'desc' => 'Standards rigoureux', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                    ['title' => 'Performance', 'desc' => 'Résultats concrets', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['title' => 'Développement durable', 'desc' => 'Impact positif', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Économie nationale', 'desc' => 'Croissance locale', 'icon' => 'M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm6.5-3H21'],
                ];
            @endphp
            @foreach($engagements as $index => $engagement)
                <div class="glass rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-500 group cursor-default"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 scale-100' : 'opacity-0 scale-90']"
                     style="transition-delay: {{ $index * 100 + 200 }}ms">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:from-accent/30 group-hover:to-accent/10 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $engagement['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-1">{{ $engagement['title'] }}</h3>
                    <p class="text-white/40 text-xs">{{ $engagement['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- GALLERY — Infinite marquee carousel --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white overflow-hidden relative" x-data="{ v: false }" x-intersect:enter="v = true">
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[10%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-14 relative z-10">
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <div>
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-3">
                    <span class="w-8 h-px bg-accent"></span>
                    Galerie
                </span>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Nos Installations</h2>
            </div>
            <p class="text-gray-500 max-w-md">Découvrez nos équipements modernes et nos sites de production à travers le Mali.</p>
        </div>
    </div>

    {{-- Row 1: left-to-right --}}
    <div class="mb-4 overflow-hidden group/gallery">
        <div class="flex gap-4 animate-marquee group-hover/gallery:[animation-play-state:paused]">
            @for($dup = 0; $dup < 2; $dup++)
                @foreach(range(3, 14) as $img)
                    <div class="flex-shrink-0 w-80 h-60 rounded-2xl overflow-hidden relative group/item">
                        <img src="{{ asset('images/gallery/img' . $img . '.jpeg') }}" alt="Galerie UAC" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform duration-700" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300"></div>
                    </div>
                @endforeach
            @endfor
        </div>
    </div>

    {{-- Row 2: right-to-left --}}
    <div class="overflow-hidden group/gallery2">
        <div class="flex gap-4 animate-marquee direction-reverse group-hover/gallery2:[animation-play-state:paused]" style="animation-direction: reverse;">
            @for($dup = 0; $dup < 2; $dup++)
                @foreach(range(15, 26) as $img)
                    <div class="flex-shrink-0 w-72 h-52 rounded-2xl overflow-hidden relative group/item">
                        <img src="{{ asset('images/gallery/img' . $img . '.jpeg') }}" alt="Galerie UAC" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform duration-700" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300"></div>
                    </div>
                @endforeach
            @endfor
        </div>
    </div>
</section>
{{-- BLOG SECTION --}}
{{-- ═══════════════════════════════════════════════════════ --}}
@if($latestPosts->count() > 0)
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 left-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -3s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col sm:flex-row items-center sm:items-end justify-between gap-4 mb-10 sm:mb-14 text-center sm:text-left"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <div>
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-xs sm:text-sm uppercase tracking-widest mb-2 sm:mb-3">
                    <span class="w-6 sm:w-8 h-px bg-accent hidden sm:inline-block"></span>
                    Actualités
                    <span class="w-6 sm:w-8 h-px bg-accent sm:hidden"></span>
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900">Dernières Nouvelles</h2>
            </div>
            <a href="{{ route('blog') }}" class="group sm:inline-flex items-center gap-2 text-sm sm:text-base text-primary font-bold hover:text-primary-light transition-colors mt-2 sm:mt-0">
                Voir tout
                <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($latestPosts as $index => $post)
                <article class="group bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-gray-100"
                         :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                         style="transition-delay: {{ ($index + 1) * 150 }}ms">
                    @if($post->image)
                        <div class="h-44 sm:h-52 overflow-hidden relative">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                <span class="px-2.5 sm:px-3 py-1 sm:py-1.5 bg-white/90 backdrop-blur-sm rounded-full text-[10px] sm:text-xs font-bold text-primary uppercase tracking-wider">{{ $post->category }}</span>
                            </div>
                        </div>
                    @endif
                    <div class="p-5 sm:p-7">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        <p class="text-gray-500 text-xs sm:text-sm line-clamp-3 leading-relaxed mb-4 sm:mb-5">{{ $post->excerpt }}</p>
                        
                        <div class="flex items-center justify-between pt-4 sm:pt-5 border-t border-gray-100">
                            <span class="text-[10px] sm:text-xs text-gray-400 font-medium">{{ $post->published_at->format('d M Y') }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="group/link inline-flex items-center gap-1 text-xs sm:text-sm text-primary font-bold hover:text-primary-light transition-colors">
                                Lire
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CTA SECTION — Bold gradient with floating shapes --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative py-20 lg:py-32 overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary-dark"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[-10%] sm:right-[10%] w-60 sm:w-80 h-60 sm:h-80 bg-accent/10 rounded-full blur-[80px] sm:blur-[100px] animate-float"></div>
        <div class="absolute bottom-1/4 left-[-10%] sm:left-[10%] w-48 sm:w-64 h-48 sm:h-64 bg-white/5 rounded-full blur-[60px] sm:blur-[80px] animate-float-reverse"></div>
        {{-- Decorative circles --}}
        <div class="absolute top-8 sm:top-12 left-[10%] sm:left-[20%] w-24 sm:w-32 h-24 sm:h-32 border border-white/10 rounded-full"></div>
        <div class="absolute bottom-8 sm:bottom-12 right-[5%] sm:right-[15%] w-32 sm:w-48 h-32 sm:h-48 border border-white/5 rounded-full"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div :class="['transition-all duration-1000', v ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-xs sm:text-sm uppercase tracking-widest mb-4 sm:mb-6">
                <span class="w-6 sm:w-8 h-px bg-accent/50"></span>
                Collaborons
                <span class="w-6 sm:w-8 h-px bg-accent/50"></span>
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 sm:mb-6 leading-tight">
                Prêt à collaborer<br class="hidden sm:block"> avec <span class="text-accent">nous</span> ?
            </h2>
            <p class="text-white/60 text-base sm:text-lg mb-8 sm:mb-12 max-w-2xl mx-auto leading-relaxed px-4 sm:px-0">
                Que vous soyez un partenaire potentiel, un client ou un talent à la recherche d'opportunités, nous serions ravis d'échanger avec vous.
            </p>
            <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4 w-full sm:w-auto">
                <a href="{{ route('contact') }}" class="group px-6 sm:px-10 py-3.5 sm:py-5 bg-accent hover:bg-accent-dark text-primary-dark font-bold rounded-full sm:rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-accent/30 hover:-translate-y-1 inline-flex items-center justify-center gap-2 sm:gap-3 text-sm sm:text-lg w-full sm:w-auto">
                    Nous Contacter
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('partenaires') }}" class="px-6 sm:px-10 py-3.5 sm:py-5 glass hover:bg-white/15 text-white font-bold rounded-full sm:rounded-2xl transition-all duration-300 hover:-translate-y-1 text-sm sm:text-lg flex justify-center items-center w-full sm:w-auto">
                    Devenir Partenaire
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
