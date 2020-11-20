<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lend_book extends Model
{
    protected $table = 'lend_books';

    protected $fillable = [
        'lend_number',
        'book_number',
        'account_number',
        'return_day',
        'return_flag'
    ];

    protected $casts = [
      'lend_number' => 'integer',
      'book_number' => 'integer',
      'account_number' => 'integer',
      'return_flag' => 'boolean'
  ];

  public $timestamps = false;
}

