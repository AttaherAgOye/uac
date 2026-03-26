<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UAC-IOD - Groupe industriel multisectoriel engagé dans le développement stratégique du Mali.">
    <title>@yield('title', 'UAC-IOD Groupe') - UAC-IOD</title>

    <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/jpeg">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-800" x-data="{ mobileMenu: false }">

    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
         x-data="{ scrolled: false }"
         x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
         :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="UAC-IOD" class="h-12 w-12 rounded-lg object-cover shadow-md group-hover:shadow-lg transition-shadow duration-300">
                    <div>
                        <span class="text-xl font-bold transition-colors duration-300" :class="scrolled ? 'text-primary' : 'text-white'">UAC-IOD</span>
                        <span class="block text-xs transition-colors duration-300" :class="scrolled ? 'text-gray-500' : 'text-white/70'">Groupe Industriel</span>
                    </div>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden lg:flex items-center space-x-1">
                    @php
                        $navItems = [
                            ['route' => 'home', 'label' => 'Accueil'],
                            ['route' => 'groupe', 'label' => 'Le Groupe'],
                            ['route' => 'poles', 'label' => 'Nos Pôles'],
                            ['route' => 'carrieres', 'label' => 'Carrières'],
                            ['route' => 'blog', 'label' => 'Blog'],
                            ['route' => 'partenaires', 'label' => 'Partenaires'],
                        ];
                    @endphp
                    @foreach($navItems as $item)
                        <a href="{{ route($item['route']) }}"
                           class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group"
                           :class="scrolled ? 'text-gray-700 hover:text-primary hover:bg-primary/5' : 'text-white/90 hover:text-white hover:bg-white/10'">
                            {{ $item['label'] }}
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-accent rounded-full transition-all duration-300 group-hover:w-3/4
                                {{ request()->routeIs($item['route']) ? 'w-3/4' : '' }}"></span>
                        </a>
                    @endforeach
                    <a href="{{ route('contact') }}"
                       class="ml-4 px-6 py-2.5 bg-accent hover:bg-accent-dark text-primary-dark font-semibold rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-accent/30 hover:-translate-y-0.5">
                        Nous Contacter
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2 rounded-lg transition-colors"
                        :class="scrolled ? 'text-gray-700 hover:bg-gray-100' : 'text-white hover:bg-white/10'">
                    <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenu" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="mobileMenu"
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden bg-white shadow-2xl rounded-b-2xl border-t border-gray-100">
            <div class="px-4 py-6 space-y-1">
                @foreach($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                       class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-primary/5 rounded-lg font-medium transition-all duration-200
                           {{ request()->routeIs($item['route']) ? 'text-primary bg-primary/5' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}"
                   class="block mt-4 px-4 py-3 bg-accent hover:bg-accent-dark text-primary-dark font-semibold rounded-lg text-center transition-all duration-200">
                    Nous Contacter
                </a>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Main Footer --}}
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                {{-- Brand --}}
                <div class="lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="UAC-IOD" class="h-12 w-12 rounded-lg object-cover">
                        <span class="text-xl font-bold text-white">UAC-IOD</span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Groupe industriel multisectoriel engagé dans le développement stratégique du Mali.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-accent hover:text-primary-dark flex items-center justify-center transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-accent hover:text-primary-dark flex items-center justify-center transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Liens rapides --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Liens Rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Accueil</a></li>
                        <li><a href="{{ route('groupe') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Le Groupe</a></li>
                        <li><a href="{{ route('poles') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Nos Pôles</a></li>
                        <li><a href="{{ route('carrieres') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Carrières</a></li>
                        <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Blog</a></li>
                    </ul>
                </div>

                {{-- Nos Pôles --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Nos Pôles</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('poles.nutrition') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Nutrition Animale</a></li>
                        <li><a href="{{ route('poles.transport') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Transport & Logistique</a></li>
                        <li><a href="{{ route('poles.vehicules') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Vente de Véhicules</a></li>
                        <li><a href="{{ route('poles.hydrocarbures') }}" class="text-gray-400 hover:text-accent transition-colors duration-200 text-sm">Hydrocarbures</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Contact</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-gray-400 text-sm">Zone Industrielle, Banancoro – Bamako, Route de Sikasso</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span class="text-gray-400 text-sm">70 91 12 62 / 76 36 08 12</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-gray-400 text-sm">uac.aliment@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-white/10 py-6 flex flex-col md:flex-row items-center justify-between">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} UAC-IOD Groupe. Tous droits réservés.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-accent text-sm transition-colors">Mentions légales</a>
                    <a href="#" class="text-gray-500 hover:text-accent text-sm transition-colors">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Flash Messages --}}
    @if(session('success'))
        <div x-data="{ show: true }"
             x-show="show"
             x-init="setTimeout(() => show = false, 5000)"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-2"
             class="fixed bottom-6 right-6 z-50 bg-primary text-white px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3">
            <svg class="w-6 h-6 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-sm font-medium">{{ session('success') }}</span>
            <button @click="show = false" class="ml-2 text-white/70 hover:text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    @endif

    @stack('scripts')
</body>
</html>
