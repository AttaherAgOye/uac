@extends('layouts.app')

@section('title', 'Blog & Actualités')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary-dark"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.12),_transparent_60%)]"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <div :class="['transition-all duration-700', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                <span class="inline-flex items-center gap-2 px-5 py-2 glass rounded-full text-sm font-medium text-white/90 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Actualités
                </span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight"
                :class="['transition-all duration-700 delay-150', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Blog & <span class="text-accent">Actualités</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl mx-auto leading-relaxed"
               :class="['transition-all duration-700 delay-300', loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                Analyses et informations sur nos activités et le développement industriel au Mali.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- ARTICLES --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-28 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($posts->count() > 0)
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $index => $post)
                    <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-gray-100"
                             x-data="{ v: false }" x-intersect:enter="v = true"
                             :class="['transition-all duration-700 ease-out', v ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']"
                             style="transition-delay: {{ ($index % 3) * 100 }}ms">
                        @if($post->image)
                            <div class="h-56 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-primary uppercase tracking-wider">{{ $post->category }}</span>
                                </div>
                            </div>
                        @else
                            <div class="h-56 bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center relative">
                                <svg class="w-16 h-16 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-primary uppercase tracking-wider">{{ $post->category }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="p-7">
                            <span class="text-xs text-gray-400 font-medium">{{ $post->published_at->format('d M Y') }}</span>
                            <h3 class="text-xl font-extrabold text-gray-900 mt-2 mb-3 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-3 leading-relaxed mb-5">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="group/link inline-flex items-center gap-1 text-sm text-primary font-bold hover:text-primary-light transition-colors">
                                Lire l'article
                                <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-14">
                {{ $posts->links() }}
            </div>
        @else
            <div class="bg-white rounded-3xl p-20 text-center border border-gray-100">
                <div class="w-24 h-24 rounded-3xl bg-gray-50 flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4">Aucun article pour le moment</h3>
                <p class="text-gray-500 text-lg max-w-md mx-auto">Nos articles et actualités seront bientôt disponibles. Revenez nous voir prochainement.</p>
            </div>
        @endif
    </div>
</section>

@endsection
