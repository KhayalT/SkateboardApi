<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    public $timestamps=false;

    public function colors(){
        return $this->belongsToMany(Color::class,'skateboard__colors','color_id','skateboard_id');
    }
}
