<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table = 'books';

    protected $guarded = [
        'book_number'
    ];

    protected $fillable = [
        'title',
        'title_furigana',
        'publisher',
        'Author',
        'Author_furigana',
        'year_of_issue',
        'logic_flag'
    ];

  public $timestamps = false;
}
