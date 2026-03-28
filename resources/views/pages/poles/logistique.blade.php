@extends('layouts.app')

@section('title', 'Logistique')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/img5.jpeg') }}" alt="Logistique" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
        <div class="absolute inset-0 bg-gradient-to-br from-[#0D3B12]/90 via-[#1B5E20]/70 to-[#0D3B12]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-transparent to-transparent opacity-90"></div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10 translate-y-[2px]">
        <svg class="relative block w-full h-[30px] sm:h-[50px] md:h-[80px] lg:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,93.81,104.3,88.4,156.4,79.52c55.3-9.4,110.6-21.4,165-23.08Z" fill="#ffffff"></path>
        </svg>
    </div>
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
                    Pôle 3
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Logistique <span class="text-accent">Intégrée</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Une organisation structurée pour une exécution sans faille des flux de marchandises. Nous avons mis en place des règles précises pour garantir une gestion fluide et rigoureuse des marchandises.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- SERVICES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-indigo-400"></span>
                Nos services
                <span class="w-8 h-px bg-indigo-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Expertise Logistique</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16" x-data="{ v: false }" x-intersect:enter="v = true">
            @php
                $services = [
                    ['name' => 'Stockage & Magasins', 'desc' => 'Organisation avancée des magasins et stockage optimisé.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'color' => '#4f46e5'],
                    ['name' => 'Manutention & Sécurité', 'desc' => 'Manutention maîtrisée avec conditionnement sécurisé.', 'icon' => 'M4 6h16M4 10h16M4 14h16M4 18h16', 'color' => '#059669'],
                    ['name' => 'Scanning & Traçabilité', 'desc' => 'Saisie en temps réel, étiquetage conforme et suivi.', 'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4', 'color' => '#2563eb'],
                    ['name' => 'Picking & Préparation', 'desc' => 'Préparation de commandes et intégration systèmes SI clients.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2v1H9V5z', 'color' => '#d97706'],
                    ['name' => 'Gestion des Flux', 'desc' => 'Gestion des flux en temps réel pour sécuriser les opérations.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => '#7c3aed'],
                    ['name' => 'Emballage Conforme', 'desc' => 'Étiquetage et emballage conformes pour toute expédition.', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'color' => '#0d9488'],
                ];
            @endphp
            @foreach($services as $index => $item)
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-indigo-200 hover:-translate-y-2 transition-all duration-500 text-center group"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                     style="transition-delay: {{ ($index + 1) * 100 }}ms">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg group-hover:scale-110 transition-transform duration-300"
                         style="background-color: {{ $item['color'] }}">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 mb-2">{{ $item['name'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center font-bold text-xl text-indigo-600 mt-8 mb-14 underline decoration-indigo-200 underline-offset-4">
            Nous structurons vos flux pour sécuriser vos opérations.
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('contact') }}?type=cotation" class="group inline-flex items-center gap-3 px-10 py-5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-indigo-600/20 hover:-translate-y-1 text-lg">
                Solliciter nos services de logistique
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
