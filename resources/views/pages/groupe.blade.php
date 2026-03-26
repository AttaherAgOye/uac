@extends('layouts.app')

@section('title', 'Le Groupe')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-56 lg:pt-48 lg:pb-80 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    {{-- Background image + multi-layer gradient --}}
    <div class="absolute inset-0 bg-[#0D3B12]">
        <img src="{{ asset('images/pages/hi/team.jpeg') }}" alt="Le Groupe" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
        {{-- Garantir la présence du vert avec des opacités explicites et un mélange --}}
        <div class="absolute inset-0 bg-gradient-to-br from-[#0D3B12]/90 via-[#1B5E20]/70 to-[#0D3B12]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-transparent to-transparent opacity-90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    </div>
    
    {{-- Solid White Curve Transition --}}
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
        <div class="absolute top-1/3 left-[15%] grid grid-cols-4 gap-3 opacity-20">
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
                    Notre Histoire
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Le Groupe <span class="text-accent">UAC-IOD</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Une vision née du terrain, une ambition portée par l'action.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- TIMELINE / STORY --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-20" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                D'un camion à un groupe structuré
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Une vision née du terrain</h2>
        </div>

        {{-- Timeline Items --}}
        @php
            $timeline = [
                [
                    'title' => 'Les Débuts',
                    'subtitle' => 'Transport',
                    'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
                    'bg' => 'bg-primary/10',
                    'text' => 'text-primary',
                    'dot' => 'bg-primary',
                    'hover_border' => 'hover:border-primary/50 hover:shadow-primary/10',
                    'arrow_hover' => 'group-hover:border-primary/50',
                    'paragraphs' => [
                        "L'histoire de UAC-IOD commence simplement. Avec une activité de transport. Un camion. Et une volonté claire : travailler avec rigueur et structurer progressivement.",
                        "Très tôt, M. DIARRA Sékou comprend que la logistique est un pilier stratégique de l'économie. Sans transport, rien ne circule. Sans circulation, rien ne se développe."
                    ],
                ],
                [
                    'title' => 'La Diversification',
                    'subtitle' => 'Société Diarra Négoce',
                    'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    'bg' => 'bg-accent/10',
                    'text' => 'text-accent-dark',
                    'dot' => 'bg-accent',
                    'hover_border' => 'hover:border-accent/50 hover:shadow-accent/10',
                    'arrow_hover' => 'group-hover:border-accent/50',
                    'paragraphs' => [
                        "Convaincu que le développement économique repose sur plusieurs leviers complémentaires, il fonde la SOCIÉTÉ DIARRA NÉGOCE.",
                        "Le groupe élargit alors ses activités vers la vente de véhicules, l'industrie et la distribution d'hydrocarbures. Chaque nouvelle activité répond à une logique claire : renforcer les secteurs stratégiques."
                    ],
                ],
                [
                    'title' => 'Production Locale',
                    'subtitle' => 'UAC – Bu Duman',
                    'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                    'bg' => 'bg-emerald-50',
                    'text' => 'text-emerald-600',
                    'dot' => 'bg-emerald-500',
                    'hover_border' => 'hover:border-emerald-500/50 hover:shadow-emerald-500/10',
                    'arrow_hover' => 'group-hover:border-emerald-500/50',
                    'paragraphs' => [
                        "Face à la dépendance aux importations dans le secteur agricole, une question s'impose : pourquoi ne pas produire localement ?",
                        "C'est ainsi qu'est créée l'Usine d'Aliments Complets (UAC), avec la marque Bu Duman – Aliments Complets & Sécurisés. L'objectif : soutenir les éleveurs avec des produits adaptés aux réalités locales."
                    ],
                ],
            ];
        @endphp

        <div class="relative py-10">
            {{-- Ligne verticale centrale --}}
            <div class="absolute left-[28px] md:left-1/2 top-0 bottom-0 w-1.5 bg-gray-100 md:-translate-x-1/2 rounded-full overflow-hidden">
                <div class="w-full h-full bg-gradient-to-b from-primary via-accent to-emerald-400 origin-top animate-pulse opacity-50"></div>
            </div>

            <div class="space-y-16 md:space-y-24">
                @foreach($timeline as $index => $step)
                    <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between {{ $index % 2 !== 0 ? 'md:flex-row-reverse' : '' }}" 
                         x-data="{ v: false }" x-intersect:enter="v = true">
                        
                        {{-- Contenu principal (Carte) --}}
                        <div class="w-full md:w-[45%] pl-20 md:pl-0"
                             :class="['transition-all duration-1000 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 {{ $index % 2 === 0 ? '-translate-x-16' : 'translate-x-16' }}']"
                             style="transition-delay: {{ $index * 150 }}ms">
                            
                            <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-xl shadow-gray-200/50 border border-gray-100 relative group transition-all duration-500 hover:-translate-y-2 {{ $step['hover_border'] }}">
                                
                                {{-- Flèche de la carte (visible uniquement sur desktop) --}}
                                <div class="hidden md:block absolute top-1/2 -translate-y-1/2 w-6 h-6 bg-white border border-gray-100 {{ $index % 2 === 0 ? '-right-3 border-b-0 border-l-0 rotate-45' : '-left-3 border-t-0 border-r-0 rotate-45' }} {{ $step['arrow_hover'] }} transition-colors z-10"></div>

                                <div class="flex items-center gap-5 mb-6">
                                    <div class="w-16 h-16 rounded-2xl {{ $step['bg'] }} flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                        <svg class="w-8 h-8 {{ $step['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-extrabold text-gray-900 mb-1">{{ $step['title'] }}</h3>
                                        <span class="inline-block px-3 py-1 rounded-full {{ $step['bg'] }} {{ $step['text'] }} text-xs font-bold uppercase tracking-wider">{{ $step['subtitle'] }}</span>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    @foreach($step['paragraphs'] as $p)
                                        <p class="text-gray-600 leading-relaxed text-lg">{{ $p }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Point central --}}
                        <div class="absolute left-[13px] md:left-1/2 top-10 md:top-1/2 -translate-y-1/2 md:-translate-x-1/2 w-9 h-9 rounded-full {{ $step['dot'] }} border-4 border-white shadow-lg shadow-gray-300 flex items-center justify-center z-20"
                             :class="['transition-all duration-500 ease-out', v ? 'opacity-100 scale-100' : 'opacity-0 scale-50']"
                             style="transition-delay: {{ $index * 150 + 200 }}ms">
                             <div class="w-2.5 h-2.5 rounded-full bg-white/90 animate-ping"></div>
                        </div>

                        {{-- Grand Numéro décoratif --}}
                        <div class="hidden md:flex w-[45%] {{ $index % 2 === 0 ? 'justify-start pl-20' : 'justify-end pr-20' }} items-center pointer-events-none select-none"
                             :class="['transition-all duration-1000 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 {{ $index % 2 === 0 ? 'translate-x-16' : '-translate-x-16' }}']"
                             style="transition-delay: {{ $index * 150 + 100 }}ms">
                            <span class="text-[180px] font-extrabold text-gray-50 leading-none tracking-tighter">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- KEY FIGURES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-[5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 left-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -3s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-20" x-data="{ v: false }" x-intersect:enter="v = true"
             :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                <span class="w-8 h-px bg-accent"></span>
                Chiffres clés
                <span class="w-8 h-px bg-accent"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Des chiffres qui parlent d'eux-mêmes</h2>
        </div>

        {{-- Stats grid --}}
        <div class="grid grid-cols-2 gap-5">
            @php
                $stats = [
                    ['value' => '4', 'label' => 'Pôles d\'activités', 'gradient' => 'from-primary to-primary-light'],
                    ['value' => '100+', 'label' => 'Collaborateurs', 'gradient' => 'from-accent to-accent-dark'],
                    ['value' => '10+', 'label' => 'Années d\'expérience', 'gradient' => 'from-emerald-500 to-emerald-600'],
                    ['value' => 'Mali', 'label' => 'Couverture nationale', 'gradient' => 'from-blue-500 to-blue-600'],
                ];
            @endphp
            @foreach($stats as $stat)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <span class="text-3xl font-extrabold bg-gradient-to-r {{ $stat['gradient'] }} bg-clip-text text-transparent">{{ $stat['value'] }}</span>
                    <span class="block text-sm text-gray-500 mt-1 font-medium">{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- MISSION & VALUES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/3 rounded-full blur-[120px]"></div>
    
    {{-- Floating modern shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[-5%] w-64 h-64 bg-accent/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-[5%] w-80 h-80 bg-primary/5 rounded-full blur-3xl animate-float-reverse" style="animation-delay: -2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-20">
            {{-- Mission --}}
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out', v ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12']">
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-accent"></span>
                    Notre Mission
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">Développer des activités industrielles <span class="text-primary">performantes</span></h2>
                <p class="text-gray-500 text-lg leading-relaxed mb-10">
                    Contribuer à la modernisation des filières agricoles, logistiques et énergétiques du Mali.
                </p>

                {{-- Stats grid --}}
                <div class="grid grid-cols-2 gap-5">
                    @php
                        $stats = [
                            ['value' => '4', 'label' => 'Pôles d\'activités', 'gradient' => 'from-primary to-primary-light'],
                            ['value' => '100+', 'label' => 'Collaborateurs', 'gradient' => 'from-accent to-accent-dark'],
                            ['value' => '10+', 'label' => 'Années d\'expérience', 'gradient' => 'from-emerald-500 to-emerald-600'],
                            ['value' => 'Mali', 'label' => 'Couverture nationale', 'gradient' => 'from-blue-500 to-blue-600'],
                        ];
                    @endphp
                    @foreach($stats as $stat)
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                            <span class="text-3xl font-extrabold bg-gradient-to-r {{ $stat['gradient'] }} bg-clip-text text-transparent">{{ $stat['value'] }}</span>
                            <span class="block text-sm text-gray-500 mt-1 font-medium">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Values --}}
            <div x-data="{ v: false }" x-intersect:enter="v = true"
                 :class="['transition-all duration-800 ease-out delay-200', v ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12']">
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-accent"></span>
                    Nos Valeurs
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-8 leading-tight">Ce qui nous <span class="text-accent">guide</span></h2>

                <div class="space-y-4">
                    @php
                        $values = [
                            ['name' => 'Rigueur', 'desc' => 'Méthode et discipline dans chaque action.', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['name' => 'Engagement', 'desc' => 'Implication totale dans nos missions.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['name' => 'Expertise', 'desc' => 'Maîtrise technique et savoir-faire industriel.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                            ['name' => 'Innovation', 'desc' => 'Recherche permanente de solutions nouvelles.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['name' => 'Responsabilité', 'desc' => 'Conscience de notre impact économique et social.', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ];
                    @endphp
                    @foreach($values as $i => $value)
                        <div class="group bg-white rounded-2xl p-5 flex items-start gap-4 shadow-sm border border-gray-100 hover:shadow-md hover:border-primary/20 transition-all duration-300 cursor-default">
                            <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center shrink-0 group-hover:from-primary/20 group-hover:to-primary/10 transition-all">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $value['icon'] }}"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 group-hover:text-primary transition-colors">{{ $value['name'] }}</h3>
                                <p class="text-gray-500 text-sm mt-1">{{ $value['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- AUJOURD'HUI --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 sm:py-20 lg:py-28 bg-primary-dark relative overflow-hidden" x-data="{ v: false }" x-intersect:enter="v = true">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/8 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary-light/10 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div :class="['transition-all duration-700', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
            <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-6">
                <span class="w-8 h-px bg-accent/50"></span>
                Aujourd'hui
                <span class="w-8 h-px bg-accent/50"></span>
            </span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-12 leading-tight">
                UAC s'appuie <span class="text-accent">sur</span>
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-14">
            @php
                $pillars = [
                    ['text' => 'Des équipements industriels modernes', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'],
                    ['text' => 'Un processus de production maîtrisé', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                    ['text' => 'Un laboratoire intégré', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['text' => 'Une équipe qualifiée', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                ];
            @endphp
            @foreach($pillars as $index => $pillar)
                <div class="glass rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-500 group cursor-default"
                     :class="['transition-all duration-700 ease-out', v ? 'opacity-100 scale-100' : 'opacity-0 scale-90']"
                     style="transition-delay: {{ $index * 100 + 200 }}ms">
                    <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $pillar['icon'] }}"/></svg>
                    </div>
                    <p class="text-white font-semibold text-sm">{{ $pillar['text'] }}</p>
                </div>
            @endforeach
        </div>

        <div :class="['transition-all duration-700 delay-500', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
            <p class="text-white/60 text-lg max-w-2xl mx-auto leading-relaxed mb-10">
                UAC-IOD poursuit son développement avec méthode, rigueur et une ambition claire : participer activement à la transformation industrielle du Mali.
            </p>
            <a href="{{ route('poles') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-accent hover:bg-accent-dark text-primary-dark font-bold rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-accent/30 hover:-translate-y-1">
                Découvrir nos pôles d'activités
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
