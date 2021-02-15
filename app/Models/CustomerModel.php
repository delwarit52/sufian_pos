<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','package_id','name', 'email', 'phone', 'nid' ,'ponmac',
'routeid','address', 'status'];

}
