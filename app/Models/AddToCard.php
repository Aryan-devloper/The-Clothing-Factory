<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddToCard extends Model
{
    use HasFactory;

    protected $table = 'addtocard';

    protected $fillable = [
        'user_id', 'order_id', 'product_name', 'size', 'email', 'phone', 'date', 'quantity', 'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
