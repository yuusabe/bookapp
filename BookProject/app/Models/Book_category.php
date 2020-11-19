<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book_category extends Model
{
    protected $table = 'book_categories';

    protected $guarded = [
        'category_kanrinum'
    ];

    protected $fillable = [
        'book_number',
        'category_number',
        'logic_flag'
    ];

  public $timestamps = false;
}
