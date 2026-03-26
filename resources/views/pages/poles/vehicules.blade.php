@extends('layouts.app')

@section('title', 'Vente de Véhicules')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0">
        <img src="{{ asset('images/pages/img6.jpeg') }}" alt="Véhicules" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900/95 via-amber-800/85 to-amber-900/90"></div>
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
                    Pôle 3
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Vente de <span class="text-accent">Véhicules</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Des solutions adaptées aux besoins professionnels et industriels.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- TYPES DE VÉHICULES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-amber-400"></span>
                Notre gamme
                <span class="w-8 h-px bg-amber-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Types de Véhicules</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20" x-data="{ v: false }" x-intersect:enter="v = true">
            @php
                $types = [
                    ['name' => 'Véhicules Utilitaires', 'desc' => 'Pour les besoins quotidiens des entreprises et services.', 'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0', 'gradient' => 'from-amber-500 to-amber-600'],
                    ['name' => 'Camions Industriels', 'desc' => 'Puissance et fiabilité pour l\'industrie et le BTP.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'gradient' => 'from-orange-500 to-orange-600'],
                    ['name' => 'Véhicules Spécialisés', 'desc' => 'Solutions sur mesure pour missions spécifiques.', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z', 'gradient' => 'from-yellow-500 to-yellow-600'],
                    ['name' => 'Solutions Logistiques', 'desc' => 'Véhicules adaptés aux activités commerciales.', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'gradient' => 'from-amber-600 to-amber-700'],
                ];
            @endphp
            @foreach($types as $index => $type)
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-amber-200 hover:-translate-y-2 transition-all duration-500 text-center group"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                     style="transition-delay: {{ ($index + 1) * 100 }}ms">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br {{ $type['gradient'] }} flex items-center justify-center mx-auto mb-5 shadow-lg shadow-amber-500/15 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $type['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">{{ $type['name'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $type['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Why us --}}
        <div class="bg-gradient-to-br from-amber-50 to-orange-50/50 rounded-3xl p-10 border border-amber-100 mb-14" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <h3 class="text-2xl font-extrabold text-gray-900 mb-8">Pourquoi choisir UAC-IOD ?</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $reasons = [
                        ['text' => 'Véhicules de qualité', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                        ['text' => 'Conseil personnalisé', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                        ['text' => 'Prix compétitifs', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['text' => 'Service après-vente', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'],
                    ];
                @endphp
                @foreach($reasons as $reason)
                    <div class="flex items-center gap-3 p-4 bg-white rounded-2xl border border-amber-100/50">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $reason['icon'] }}"/></svg>
                        </div>
                        <span class="text-gray-700 font-bold text-sm">{{ $reason['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}?type=devis" class="group inline-flex items-center gap-3 px-10 py-5 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-amber-600/20 hover:-translate-y-1 text-lg">
                    Demander un devis
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="px-10 py-5 border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white font-bold rounded-2xl transition-all duration-300 text-lg">
                    Contacter un conseiller
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
