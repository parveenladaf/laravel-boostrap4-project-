<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Image;


class ContentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contentObj = new Content();
        $autorId = session('authorId');
        $data = [
            'title' => $request->title,
            'post' => $request->post,
            'author_id' => $autorId
        ];
        $contentObj->create($data);
        $response = [
            'success' => true,
            'message' => "Content save successfully"
        ];
        return redirect('/');

    }

    public function getContents(Request $request)
    {
        $contentObj = new Content();
        $contents = $contentObj->findAll();
        return view('home', compact('contents'));
    }


}
