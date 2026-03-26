@extends('layouts.app')

@section('title', 'Contact')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary-dark"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-[5%] w-48 h-48 bg-white/5 rounded-full blur-2xl animate-float-reverse"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-5 py-2 glass rounded-full text-sm font-medium text-white/90 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Contact
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Nous <span class="text-accent">Contacter</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Une question, une demande de devis ou de cotation ? Notre équipe est à votre disposition.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CONTACT INFO + FORM --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-5 gap-12">
            {{-- Contact Info --}}
            <div class="lg:col-span-2" x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-accent"></span>
                    Informations
                </span>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Restons en <span class="text-primary">contact</span></h2>

                <div class="space-y-4 mb-10">
                    @php
                        $contacts = [
                            ['title' => 'Adresse', 'lines' => ['Zone Industrielle, Banancoro – Bamako', 'Route de Sikasso, Mali'], 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'gradient' => 'from-primary to-primary-light'],
                            ['title' => 'Téléphone', 'lines' => ['70 91 12 62', '76 36 08 12'], 'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'gradient' => 'from-emerald-500 to-emerald-600'],
                            ['title' => 'Email', 'lines' => ['uac.aliment@gmail.com'], 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'gradient' => 'from-accent to-accent-dark', 'link' => 'mailto:uac.aliment@gmail.com'],
                            ['title' => 'Horaires', 'lines' => ['Lun - Ven : 8h00 - 17h00', 'Sam : 8h00 - 13h00'], 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'gradient' => 'from-blue-500 to-blue-600'],
                        ];
                    @endphp
                    @foreach($contacts as $contact)
                        <div class="flex items-start gap-4 p-5 bg-white rounded-2xl border border-gray-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $contact['gradient'] }} flex items-center justify-center shrink-0 shadow-lg shadow-primary/10 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $contact['icon'] }}"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">{{ $contact['title'] }}</h3>
                                @foreach($contact['lines'] as $line)
                                    @if(isset($contact['link']))
                                        <a href="{{ $contact['link'] }}" class="text-primary text-sm hover:text-primary-light transition-colors block">{{ $line }}</a>
                                    @else
                                        <p class="text-gray-500 text-sm">{{ $line }}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3" x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <form action="{{ route('contact.submit') }}" method="POST"
                      class="bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-gray-100">
                    @csrf
                    <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Envoyez-nous un message</h2>
                    <p class="text-gray-500 text-sm mb-8">Nous vous répondrons dans les meilleurs délais.</p>

                    <div class="grid sm:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nom complet *</label>
                            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                   class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                            @error('name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                   class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                            @error('email') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                   class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                        </div>
                        <div>
                            <label for="type" class="block text-sm font-bold text-gray-700 mb-2">Type de demande *</label>
                            <select name="type" id="type" required
                                    class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none bg-white">
                                <option value="general" {{ old('type', request('type')) == 'general' ? 'selected' : '' }}>Demande générale</option>
                                <option value="devis" {{ old('type', request('type')) == 'devis' ? 'selected' : '' }}>Demande de devis</option>
                                <option value="cotation" {{ old('type', request('type')) == 'cotation' ? 'selected' : '' }}>Demande de cotation</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="subject" class="block text-sm font-bold text-gray-700 mb-2">Sujet *</label>
                        <input type="text" name="subject" id="subject" required value="{{ old('subject') }}"
                               class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                        @error('subject') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-8">
                        <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message *</label>
                        <textarea name="message" id="message" rows="6" required
                                  class="w-full px-5 py-3.5 rounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                            class="w-full px-8 py-4.5 bg-primary hover:bg-primary-light text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 text-lg">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- MAP --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative">
    <div class="h-[450px] bg-gray-200 relative rounded-t-[2rem] overflow-hidden -mt-8">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.1234567!2d-8.0!3d12.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDM2JzAwLjAiTiA4wrAwMCcwMC4wIlc!5e0!3m2!1sfr!2sml!4v1234567890"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="absolute inset-0">
        </iframe>
        {{-- Overlay card --}}
        <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-xl max-w-sm border border-gray-100">
            <h3 class="font-extrabold text-gray-900 mb-1">UAC-IOD Siège</h3>
            <p class="text-gray-500 text-sm">Zone Industrielle, Banancoro – Bamako, Mali</p>
        </div>
    </div>
</section>

@endsection
