<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $bookData = [
        'title' => 'required',
        'author' => 'required',
        'isbn' => 'required',
        'genre' => 'required',
        'year' => 'required',
        'price' => 'required',
        'publisher' => 'required',
        'description' => 'required',
        'image' => 'required',
        'status' => 'required',
    ];

}