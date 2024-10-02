<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuDetailController extends Controller
{
    public function index(string $id){
        
        return view('menu.detail');
    }
}



