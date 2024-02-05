<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function app ()

    {
        return view('layouts.app'
    );
    }

     public function show ()

    {
        return view('test.show'
    );
    }

    public function edit ()

    {
        return view('test.edit'
    );
    }
}
