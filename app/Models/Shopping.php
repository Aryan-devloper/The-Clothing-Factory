<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    // Specify the table name explicitly
    protected $table = 'shopping';

    protected $fillable = [
        'order_id',
        'product_name',
        'size',
        'name',
        'email',
        'phone',
        'date',
        'quantity',
        'description',
        'price'
    ];
}
