<?php

namespace App\Http\Controllers\apply;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\applyinform;
use App\Models\applyexprence;


class ApplyViewController extends Controller
{
    public function applyViewSingle(){
        return applyexprence::all();
    }
}
