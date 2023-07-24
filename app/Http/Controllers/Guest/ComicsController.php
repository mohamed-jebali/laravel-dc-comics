<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Controllers\Controller;

class ComicsController extends Controller
{
    public function index(){
        return view('index');
    }
}
