<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book_category extends Model
{
    protected $table = 'book_categories';

    protected $fillable = [
        'category_kanrinum',
        'book_number',
        'category_number',
        'logic_flag'
    ];

    protected $casts = [
      'category_kanrinum' => 'integer',
      'book_number' => 'integer',
      'category_number' => 'integer',
      'logic_flag' => 'boolean'
  ];

  public $timestamps = false;
}
