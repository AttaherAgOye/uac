@extends('layouts.app')

@section('title', 'Partenaires')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary-dark"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-5 py-2 glass rounded-full text-sm font-medium text-white/90 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Collaboration
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Devenir <span class="text-accent">Partenaire</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nous recherchons des partenaires structurés et engagés pour accompagner le développement de nos activités.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- DOMAINES DE PARTENARIAT --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/3 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                Domaines de partenariat
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">Nos axes de collaboration</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">Plusieurs opportunités de collaboration s'offrent à vous selon votre secteur d'activité.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
                $domains = [
                    ['title' => 'Distribution d\'aliments', 'desc' => 'Devenez distributeur de nos produits Bu Duman sur votre zone géographique. Bénéficiez de notre expertise et de notre réseau.', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'gradient' => 'from-emerald-500 to-green-600', 'shadow' => 'shadow-emerald-500/20'],
                    ['title' => 'Partenariats logistiques', 'desc' => 'Collaborez avec nous sur des projets de transport et logistique structurés à travers tout le territoire malien.', 'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0', 'gradient' => 'from-blue-500 to-indigo-600', 'shadow' => 'shadow-blue-500/20'],
                    ['title' => 'Collaboration commerciale', 'desc' => 'Explorons ensemble les opportunités commerciales dans nos différents secteurs d\'activité stratégiques.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'gradient' => 'from-accent to-accent-dark', 'shadow' => 'shadow-accent/20'],
                ];
            @endphp
            @foreach($domains as $index => $domain)
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl hover:border-primary/10 hover:-translate-y-2 transition-all duration-500 text-center group"
                     x-data="{ v: false }" x-intersect:enter="v = true"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                     style="transition-delay: {{ ($index + 1) * 120 }}ms">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br {{ $domain['gradient'] }} flex items-center justify-center mx-auto mb-6 shadow-lg {{ $domain['shadow'] }} group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $domain['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-gray-900 mb-3 group-hover:text-primary transition-colors">{{ $domain['title'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $domain['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PARTNERSHIP FORM --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-14" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                Formulaire
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Soumettre votre demande</h2>
            <p class="text-gray-500 text-lg">Remplissez ce formulaire et notre équipe vous recontactera rapidement.</p>
        </div>

        <form action="{{ route('partenariat.submit') }}" method="POST"
              class="bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-gray-100">
            @csrf

            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="company_name" class="block text-sm font-bold text-gray-700 mb-2">Nom de l'entreprise *</label>
                    <input type="text" name="company_name" id="company_name" required value="{{ old('company_name') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                    @error('company_name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="sector" class="block text-sm font-bold text-gray-700 mb-2">Secteur d'activité *</label>
                    <input type="text" name="sector" id="sector" required value="{{ old('sector') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                    @error('sector') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="city" class="block text-sm font-bold text-gray-700 mb-2">Ville / Région</label>
                    <input type="text" name="city" id="city" value="{{ old('city') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                </div>
                <div>
                    <label for="contact_name" class="block text-sm font-bold text-gray-700 mb-2">Nom du contact *</label>
                    <input type="text" name="contact_name" id="contact_name" required value="{{ old('contact_name') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                    @error('contact_name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="contact_email" class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="contact_email" id="contact_email" required value="{{ old('contact_email') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                    @error('contact_email') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="contact_phone" class="block text-sm font-bold text-gray-700 mb-2">Téléphone</label>
                    <input type="tel" name="contact_phone" id="contact_phone" value="{{ old('contact_phone') }}"
                           class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                </div>
            </div>

            <div class="mb-8">
                <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                <textarea name="message" id="message" rows="5"
                          class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none resize-none">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full px-8 py-4.5 bg-primary hover:bg-primary-light text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 text-lg">
                Envoyer ma demande de partenariat
            </button>
        </form>
    </div>
</section>

@endsection
