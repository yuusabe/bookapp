<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lend_book extends Model
{
    protected $table = 'lend_books';

    protected $guarded = [
        'lend_number'
    ];

    protected $fillable = [
        'book_number',
        'account_number',
        'return_day',
        'return_flag'
    ];

  public $timestamps = false;
}
