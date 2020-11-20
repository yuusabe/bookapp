<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'account_number',
        'account_name',
        'mail_address',
        'password',
        'manager_flag',
        'logic_flag'
    ];

    protected $casts = [
      'account_number' => 'integer',
      'manager_flag' => 'boolean',
      'logic_flag' => 'boolean'
  ];

  public $timestamps = false;
}