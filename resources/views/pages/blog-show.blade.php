@extends('layouts.app')

@section('title', $post->title)

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative pt-36 pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary-dark"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(249,168,37,0.08),_transparent_60%)]"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-accent/8 rounded-full blur-3xl animate-float"></div>
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('blog') }}" class="group inline-flex items-center gap-2 text-white/50 hover:text-white text-sm mb-8 transition-colors">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Retour au blog
        </a>
        <div class="flex items-center gap-3 mb-5">
            <span class="px-4 py-1.5 bg-accent/20 text-accent rounded-full text-xs font-bold uppercase tracking-wider backdrop-blur-sm border border-accent/20">{{ $post->category }}</span>
            <span class="text-white/40 text-sm">{{ $post->published_at->format('d M Y') }}</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight">{{ $post->title }}</h1>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- ARTICLE CONTENT --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/2 rounded-full blur-[120px]"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        @if($post->image)
            <div class="rounded-3xl overflow-hidden shadow-2xl -mt-20 relative z-10 mb-14 border border-gray-100">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-80 sm:h-[450px] object-cover">
            </div>
        @endif

        <article class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-gray-900 prose-p:text-gray-600 prose-p:leading-relaxed prose-a:text-primary prose-a:font-semibold prose-strong:text-gray-900 prose-blockquote:border-l-accent prose-blockquote:bg-accent/5 prose-blockquote:rounded-r-2xl prose-blockquote:py-1 prose-blockquote:px-6 prose-img:rounded-2xl">
            {!! nl2br(e($post->content)) !!}
        </article>

        {{-- Footer --}}
        <div class="mt-14 pt-8 border-t border-gray-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <span class="text-sm text-gray-500 font-medium">Publié le {{ $post->published_at->format('d/m/Y') }}</span>
            </div>
            <a href="{{ route('blog') }}" class="group inline-flex items-center gap-2 text-sm text-primary font-bold hover:text-primary-light transition-colors">
                Tous les articles
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- RELATED POSTS --}}
{{-- ═══════════════════════════════════════════════════════ --}}
@if($relatedPosts->count() > 0)
<section class="py-24 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between mb-12">
            <div>
                <span class="inline-flex items-center gap-2 text-accent font-semibold text-sm uppercase tracking-widest mb-3">
                    <span class="w-8 h-px bg-accent"></span>
                    À lire aussi
                </span>
                <h2 class="text-3xl font-extrabold text-gray-900">Articles similaires</h2>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedPosts as $related)
                <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                    @if($related->image)
                        <div class="h-52 overflow-hidden relative">
                            <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-primary uppercase tracking-wider">{{ $related->category }}</span>
                            </div>
                        </div>
                    @else
                        <div class="h-52 bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center">
                            <svg class="w-12 h-12 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                    @endif
                    <div class="p-7">
                        <span class="text-xs text-gray-400 font-medium">{{ $related->published_at->format('d M Y') }}</span>
                        <h3 class="text-lg font-extrabold text-gray-900 mt-2 mb-3 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                            <a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a>
                        </h3>
                        <a href="{{ route('blog.show', $related->slug) }}" class="group/link inline-flex items-center gap-1 text-sm text-primary font-bold hover:text-primary-light transition-colors">
                            Lire
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
