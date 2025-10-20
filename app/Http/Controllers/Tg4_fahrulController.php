<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tg4_fahrulController extends Controller
{
    public function tg4_212267()
    {
        $data = [
            'nim' => '212267',
            'nama' => 'Andi Fachrul Sheva Van Jovie'
        ];

        return view('tugas3_212267', $data);
    }
}
