<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [
        'category_number'
    ];

    protected $fillable = [
        'category_name',
        'logic_flag'
    ];

  public $timestamps = false;
}
