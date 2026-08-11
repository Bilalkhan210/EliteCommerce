<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name',
        'address',
        'phone',
        'payment_method',
        'total_amount',
        'card_number',
        'expiry_date',
        'cvv',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
