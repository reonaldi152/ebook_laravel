<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Dummy categories
        $categories = [
            (object)['name' => 'Tech', 'slug' => 'tech', 'icon' => 'dummy-icon.png'],
            (object)['name' => 'Lifestyle', 'slug' => 'lifestyle', 'icon' => 'dummy-icon.png'],
            (object)['name' => 'Business', 'slug' => 'business', 'icon' => 'dummy-icon.png'],
        ];

        // Dummy featured articles
        $featured_articles = [
            (object)['name' => 'How to learn Laravel', 'slug' => 'how-to-learn-laravel', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now(), 'category' => (object)['name' => 'Tech']],
        ];

        // Dummy articles
        $articles = [
            (object)['name' => 'The Future of AI', 'slug' => 'the-future-of-ai', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now(), 'category' => (object)['name' => 'Tech']],
            (object)['name' => 'Best Practices for Remote Work', 'slug' => 'best-practices-remote-work', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now(), 'category' => (object)['name' => 'Lifestyle']],
        ];

        // Dummy authors
        $authors = [
            (object)['name' => 'John Doe', 'slug' => 'john-doe', 'avatar' => 'dummy-avatar.png', 'news' => collect([1, 2, 3])],
        ];

        // Dummy banner ads
        $bannerads = (object)['link' => '#', 'thumbnail' => 'dummy-ads.jpg'];

        // Dummy entertainment and business articles
        $entertainment_featured_articles = (object)['name' => 'The Impact of Movies on Society', 'slug' => 'impact-of-movies', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now()];
        $entertainment_articles = $articles;

        $business_featured_articles = (object)['name' => 'Top 10 Startup Strategies', 'slug' => 'startup-strategies', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now()];
        $business_articles = $articles;

        // Dummy automotive articles
        $automotive_featured_articles = (object)['name' => 'The Evolution of Electric Cars', 'slug' => 'electric-cars', 'thumbnail' => 'dummy-thumbnail.jpg', 'created_at' => now()];
        $automotive_articles = $articles;

        return view('index', compact(
            'categories',
            'featured_articles',
            'articles',
            'authors',
            'bannerads',
            'entertainment_featured_articles',
            'entertainment_articles',
            'business_featured_articles',
            'business_articles',
            'automotive_featured_articles',
            'automotive_articles'
        ));
    }
}
