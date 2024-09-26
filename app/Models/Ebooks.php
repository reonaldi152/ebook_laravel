<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebooks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'author',
        'pdf_file',
    ];
}
