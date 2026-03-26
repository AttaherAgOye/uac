@extends('layouts.app')

@section('title', 'Carrières')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/hi/team.jpeg') }}" alt="Carrières" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
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
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-1.5 sm:py-2 glass rounded-full text-[11px] sm:text-sm font-medium text-white/90 mb-4 sm:mb-6">
                    <span class="w-1.5 sm:w-2 h-1.5 sm:h-2 rounded-full bg-accent animate-pulse"></span>
                    Rejoignez-nous
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Carrières chez <span class="text-accent">UAC-IOD</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                La performance industrielle repose avant tout sur les femmes et les hommes qui la construisent au quotidien.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CULTURE & DOMAINES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[-5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -1s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20">
            {{-- Culture --}}
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-accent"></span>
                    Notre Culture
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-8 leading-tight">Ce que nous <span class="text-primary">valorisons</span></h2>
                <div class="space-y-3">
                    @php
                        $culture = [
                            ['text' => 'La discipline et le sens des responsabilités', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                            ['text' => 'L\'esprit d\'initiative', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['text' => 'Le professionnalisme', 'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                            ['text' => 'Le travail d\'équipe', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                            ['text' => 'L\'amélioration continue', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
                        ];
                    @endphp
                    @foreach($culture as $item)
                        <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-primary/5 to-transparent rounded-2xl hover:from-primary/10 transition-all duration-300 group">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/></svg>
                            </div>
                            <span class="text-gray-700 font-semibold">{{ $item['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Domaines --}}
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-accent"></span>
                    Domaines
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-8 leading-tight">Nos domaines de <span class="text-accent">recrutement</span></h2>
                <div class="grid grid-cols-2 gap-4">
                    @php
                        $domains = [
                            ['name' => 'Production industrielle', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'color' => 'emerald'],
                            ['name' => 'Maintenance', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z', 'color' => 'blue'],
                            ['name' => 'Logistique', 'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0', 'color' => 'amber'],
                            ['name' => 'Commerce', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'color' => 'purple'],
                            ['name' => 'Administration', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'color' => 'rose'],
                            ['name' => 'Support agricole', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'teal'],
                        ];
                    @endphp
                    @foreach($domains as $domain)
                        <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-2xl border border-gray-100 hover:border-{{ $domain['color'] }}-200 hover:shadow-md hover:bg-{{ $domain['color'] }}-50/30 transition-all duration-300 group">
                            <div class="w-10 h-10 rounded-xl bg-{{ $domain['color'] }}-100 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-{{ $domain['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $domain['icon'] }}"/></svg>
                            </div>
                            <span class="text-gray-700 text-sm font-bold">{{ $domain['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- OFFRES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 right-[5%] w-72 h-72 bg-primary/4 rounded-full blur-3xl animate-float" style="animation-delay: -2s;"></div>
        <div class="absolute bottom-1/4 left-[-5%] w-64 h-64 bg-accent/4 rounded-full blur-3xl animate-float-reverse"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                Opportunités
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Offres Disponibles</h2>
        </div>

        @if($offers->count() > 0)
            <div class="grid md:grid-cols-2 gap-6 mb-16">
                @foreach($offers as $index => $offer)
                    <div class="bg-white rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all duration-500 group hover:-translate-y-1"
                         x-data="{ v: false }" x-intersect:enter="v = true"
                         :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
                         style="transition-delay: {{ $index * 100 }}ms">
                        <div class="flex items-start justify-between mb-5">
                            <div>
                                <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-primary transition-colors">{{ $offer->title }}</h3>
                                <div class="flex items-center gap-3 mt-2">
                                    <span class="inline-flex items-center gap-1 text-sm text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                        {{ $offer->location }}
                                    </span>
                                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold">{{ $offer->contract_type }}</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3 leading-relaxed">{{ $offer->description }}</p>
                        <a href="#candidature" class="group/link inline-flex items-center gap-2 text-primary font-bold text-sm hover:text-primary-light transition-colors"
                           onclick="document.getElementById('job_offer_id').value = '{{ $offer->id }}'">
                            Postuler maintenant
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-3xl p-16 text-center border border-gray-100 mb-16">
                <div class="w-20 h-20 rounded-2xl bg-gray-50 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-2xl font-extrabold text-gray-900 mb-3">Aucune offre disponible</h3>
                <p class="text-gray-500 max-w-md mx-auto">Aucune offre n'est actuellement disponible. Vous pouvez toutefois nous transmettre une candidature spontanée ci-dessous.</p>
            </div>
        @endif
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CANDIDATURE FORM --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section id="candidature" class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[10%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/3 right-[5%] w-72 h-72 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -3s;"></div>
    </div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-14" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                Postuler
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Candidature Spontanée</h2>
            <p class="text-gray-500 text-lg">Envoyez-nous votre candidature, nous l'examinerons attentivement.</p>
        </div>

        <form action="{{ route('candidature.submit') }}" method="POST" enctype="multipart/form-data"
              class="bg-gray-50 rounded-3xl p-8 sm:p-12 border border-gray-100">
            @csrf
            <input type="hidden" name="job_offer_id" id="job_offer_id" value="">

            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="last_name" class="block text-sm font-bold text-gray-700 mb-2">Nom *</label>
                    <input type="text" name="last_name" id="last_name" required value="{{ old('last_name') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
                    @error('last_name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="first_name" class="block text-sm font-bold text-gray-700 mb-2">Prénom *</label>
                    <input type="text" name="first_name" id="first_name" required value="{{ old('first_name') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
                    @error('first_name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
                    @error('email') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Téléphone *</label>
                    <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
                    @error('phone') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="desired_position" class="block text-sm font-bold text-gray-700 mb-2">Poste souhaité</label>
                <input type="text" name="desired_position" id="desired_position" value="{{ old('desired_position') }}"
                       class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
            </div>

            <div class="mb-6">
                <label for="cv" class="block text-sm font-bold text-gray-700 mb-2">CV (PDF, DOC, DOCX - max 5Mo) *</label>
                <input type="file" name="cv" id="cv" required accept=".pdf,.doc,.docx"
                       class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:bg-primary/10 file:text-primary file:font-bold file:cursor-pointer hover:file:bg-primary/20">
                @error('cv') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
            </div>

            <div class="mb-8">
                <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                <textarea name="message" id="message" rows="4"
                          class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none resize-none bg-white">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full px-8 py-4.5 bg-primary hover:bg-primary-light text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 text-lg">
                Envoyer ma candidature
            </button>
        </form>
    </div>
</section>

@endsection
