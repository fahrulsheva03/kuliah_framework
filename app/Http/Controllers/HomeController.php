<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tampilhome()
    {
        $data = [
            'nim' => '212267',
            'nama' => 'Andi Fachrul Sheva'
        ];
        return view('home', $data);
    }

    public function tampilabout()
    {
        return view('about');
    }
}
