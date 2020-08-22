<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Load Files View
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function files()
    {
        return view('signup');
    }
}
