<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Talleres extends Controller
{
    public function talleres(){
        $talleres = [
            ['titulo' => 'Danza'],
            ['titulo' => 'Baile'],    
            ['titulo' => 'Oratoria'],
            ['titulo' => 'Liderazgo'],         
        ];
        return view('talleres', compact('talleres'));
    }
}
