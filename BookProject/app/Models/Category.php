<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_number',
        'category_name',
        'logic_flag'
    ];

    protected $casts = [
      'category_number' => 'integer',
      'logic_flag' => 'boolean'
  ];

  public $timestamps = false;
}
