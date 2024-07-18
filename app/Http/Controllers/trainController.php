<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;

class trainController extends Controller
{
    public function index(){
        $train = train::all();
        return view('train.index', compact('train'));
    }
}
