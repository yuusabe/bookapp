<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    protected $table = 'accounts';

    protected $guarded = [
        'account_number'
    ];

    protected $fillable = [
        'account_name',
        'mail_address',
        'password',
        'manager_flag',
        'logic_flag'
    ];

  public $timestamps = false;
}
