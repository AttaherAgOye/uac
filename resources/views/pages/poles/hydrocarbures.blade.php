@extends('layouts.app')

@section('title', 'Distribution d\'Hydrocarbures')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/poles/hydrocarbure.jpeg') }}" alt="Hydrocarbures" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
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
                    Pôle 4
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Distribution d'<span class="text-accent">Hydrocarbures</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Approvisionnement sécurisé et structuré en produits pétroliers.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CONTENT --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center mb-20">
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <span class="inline-flex items-center gap-2 text-red-600 font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-red-400"></span>
                    Sécurité & Conformité
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">Une exigence forte en matière de <span class="text-red-600">sécurité</span></h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-10">
                    UAC-IOD intervient dans la distribution de produits pétroliers avec une exigence forte en matière de sécurité et de conformité. Notre logistique intégrée garantit un approvisionnement fiable sur l'ensemble du territoire.
                </p>
                <div class="space-y-3">
                    @php
                        $engagements = [
                            ['text' => 'Respect des normes de sécurité', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                            ['text' => 'Approvisionnement fiable et régulier', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['text' => 'Capacité opérationnelle maîtrisée', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['text' => 'Logistique intégrée au groupe', 'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0'],
                        ];
                    @endphp
                    @foreach($engagements as $eng)
                        <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-red-50 to-transparent rounded-2xl border border-red-100/50 hover:from-red-100/50 transition-all duration-300 group">
                            <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center shrink-0 group-hover:bg-red-200 transition-colors">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $eng['icon'] }}"/></svg>
                            </div>
                            <span class="text-gray-700 font-bold">{{ $eng['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/pages/poles/hydrocarbure.jpeg') }}" alt="Hydrocarbures" class="w-full h-[480px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-red-200 rounded-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-red-100 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 px-10 py-5 bg-red-600 hover:bg-red-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-red-600/20 hover:-translate-y-1 text-lg">
                Demander une consultation professionnelle
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
