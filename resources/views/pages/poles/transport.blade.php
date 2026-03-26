@extends('layouts.app')

@section('title', 'Transport & Logistique')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0">
        <img src="{{ asset('images/pages/img5.jpeg') }}" alt="Transport" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/95 via-blue-800/85 to-blue-900/90"></div>
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
                    Pôle 2
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Transport & <span class="text-accent">Logistique</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Une flotte structurée et diversifiée au service des opérateurs économiques.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- FLEET --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-full blur-[120px] -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-blue-400"></span>
                Notre flotte
                <span class="w-8 h-px bg-blue-400"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Véhicules & Équipements</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20" x-data="{ v: false }" x-intersect:enter="v = true">
            @php
                $fleet = [
                    ['name' => 'Citernes', 'desc' => 'Transport sécurisé de liquides et hydrocarbures.', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'gradient' => 'from-blue-500 to-blue-600'],
                    ['name' => 'Bennes Remorques', 'desc' => 'Transport de matériaux en vrac et matières premières.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'gradient' => 'from-indigo-500 to-indigo-600'],
                    ['name' => 'Plateaux', 'desc' => 'Acheminement de marchandises et équipements industriels.', 'icon' => 'M4 6h16M4 10h16M4 14h16M4 18h16', 'gradient' => 'from-sky-500 to-sky-600'],
                    ['name' => 'Porteurs Spécialisés', 'desc' => 'Véhicules techniques adaptés aux besoins spécifiques.', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z', 'gradient' => 'from-cyan-500 to-cyan-600'],
                ];
            @endphp
            @foreach($fleet as $index => $item)
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-blue-200 hover:-translate-y-2 transition-all duration-500 text-center group"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                     style="transition-delay: {{ ($index + 1) * 100 }}ms">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br {{ $item['gradient'] }} flex items-center justify-center mx-auto mb-5 shadow-lg shadow-blue-500/15 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ $item['name'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Engagements --}}
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50/50 rounded-3xl p-10 border border-blue-100" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <h3 class="text-2xl font-extrabold text-gray-900 mb-8">Nos engagements logistiques</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $engagements = [
                        ['text' => 'Respect des délais', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['text' => 'Sécurité des marchandises', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                        ['text' => 'Capacité adaptée', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ['text' => 'Couverture nationale', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ];
                @endphp
                @foreach($engagements as $eng)
                    <div class="flex items-center gap-3 p-4 bg-white rounded-2xl border border-blue-100/50">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $eng['icon'] }}"/></svg>
                        </div>
                        <span class="text-gray-700 font-bold text-sm">{{ $eng['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('contact') }}?type=cotation" class="group inline-flex items-center gap-3 px-10 py-5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-blue-600/20 hover:-translate-y-1 text-lg">
                Demander une cotation logistique
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
