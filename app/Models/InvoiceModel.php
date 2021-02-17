<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_no', 'package_title', 'package_price', 'cust_id', 'status'];

    




}
