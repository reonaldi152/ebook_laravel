<?php

namespace App\Http\Controllers;

use App\Models\Ebooks;
use App\Models\FeaturedNews;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index()
    {
        // Mengambil semua data featured news dari database
        $featuredNews = FeaturedNews::orderBy('published_at', 'desc')->get();

        // Mengambil semua data ebooks dari database
        $ebooks = Ebooks::all();

        // Mengirim data ke view index.blade.php
        return view('index', compact('featuredNews', 'ebooks'));
    }

    public function show($id)
    {
        $ebook = Ebooks::findOrFail($id);
        return view('details', compact('ebook'));
    }
}
