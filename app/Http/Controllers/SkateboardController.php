<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkateboardResource;
use App\Models\Skateboard;
use Illuminate\Http\Request;

class SkateboardController extends Controller
{
    public function index(){
        $skateboards=Skateboard::paginate(15);
        return SkateboardResource::collection($skateboards);
    }


}
