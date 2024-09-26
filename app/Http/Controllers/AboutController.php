<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        // Mengambil semua data ebooks dari database
        $about = About::all();

        // Mengirim data ke view index.blade.php
        return view('about', compact('about'));
    }
}
