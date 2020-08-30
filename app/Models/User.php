<?php

namespace App\Models;
use App\Models\Content;


use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user1';
    public $timestamps = false;

    public function create($data)
    {
        try {
            $author = new user();
            $author->name = $data['name'];
            $author->comment = $data['comment'];
            $author->content_id = $data['id'];
            $author->save();


        } catch (Exception $e) {
            throw $e;
        }
    }

}
