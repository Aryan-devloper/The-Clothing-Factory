<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnExchange extends Model
{


    protected $fillable = [
        'customer_name',
        'order_number',
        'email',
        'product_name',
        'reason',
        'request_type',
        'details',
    ];
}
