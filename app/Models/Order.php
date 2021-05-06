<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasOne(Skateboard::class,'id','product_id');
    }

    public function color(){
        return $this->hasOne(Color::class,'id','color_id');
    }
}
