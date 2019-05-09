<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class registerController extends Controller
{
    //Called from the main menu. Option Services. It is just to show all the offered services and their information.
    public function index()
    {
        $register = register::orderBy('servicetype_id')
            ->get();

    
        return view('register.register', ['register' => $register, 'typeSrvIdPrev' => 0]);

        
    }

}