<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Load Files View
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('comment');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $autherObj = new Content();

        $res = $autherObj->updateContent($request->all());
        return view('home')->with('success', 'User commented successfully!');
    }
}
