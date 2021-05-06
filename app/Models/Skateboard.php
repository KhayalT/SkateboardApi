<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skateboard extends Model
{
    use HasFactory;

    public function type(){
        return $this->hasOne(Type::class,'id','type_id');
    }

    public function colors(){
        return $this->belongsToMany(Color::class,'skateboard__colors','skateboard_id','color_id');
    }
}
