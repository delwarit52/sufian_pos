<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawModel extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','amount','withdraw_date'];

}
