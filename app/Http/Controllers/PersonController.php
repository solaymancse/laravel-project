<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function create(){

        return view('person.create');
        
    }
    public function getAll(){

    }
}
