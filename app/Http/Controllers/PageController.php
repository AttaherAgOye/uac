<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\JobOffer;

class PageController extends Controller
{
    public function home()
    {
        $latestPosts = Post::published()->latest('published_at')->take(3)->get();
        return view('pages.home', compact('latestPosts'));
    }

    public function groupe()
    {
        return view('pages.groupe');
    }

    public function poles()
    {
        return view('pages.poles');
    }

    public function poleNutrition()
    {
        return view('pages.poles.nutrition');
    }

    public function poleTransport()
    {
        return view('pages.poles.transport');
    }

    public function poleVehicules()
    {
        return view('pages.poles.vehicules');
    }

    public function poleHydrocarbures()
    {
        return view('pages.poles.hydrocarbures');
    }

    public function carrieres()
    {
        $offers = JobOffer::active()->latest()->get();
        return view('pages.carrieres', compact('offers'));
    }

    public function blog()
    {
        $posts = Post::published()->latest('published_at')->paginate(9);
        return view('pages.blog', compact('posts'));
    }

    public function blogShow(string $slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::published()->where('id', '!=', $post->id)->latest('published_at')->take(3)->get();
        return view('pages.blog-show', compact('post', 'relatedPosts'));
    }

    public function partenaires()
    {
        return view('pages.partenaires');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
