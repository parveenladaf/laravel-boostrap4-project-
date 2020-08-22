<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use DB;

class Content extends Model
{

    protected $table = 'content';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function create($data)
    {
        try {
            $content = new Content();
            $content->title = $data['title'];
            $content->author_id = $data['author_id'];
            $content->post = $data['post'];
            $content->save();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function findAll()
    {
        try {
            // $users = DB::table('content')->paginate(15);

            $products=Content::query();
            $products = $products->paginate(5);
        
            return $products;
    
            $result = DB::table('content')->get();
            return response()->json(['data' => $result]); 
 
            $res = DB::table('content as c')
            ->select('c.id', 'c.image', 'c.image', 'c.author_id')
            ->get();
            return ($res);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getContent($authorId)
    {
        $data = DB::table('content')->where('author_id', $authorId)->first();
        return $data;
    }
}
