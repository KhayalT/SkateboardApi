<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'amount',
        'custom_print_photo',
        'email',
        'phone_number',
        'delivery_date',
        'preparation_date',
        'address'
    ];

    public function product()
    {
        return $this->hasOne(Skateboard::class, 'id', 'product_id');
    }

    public function color()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
}
