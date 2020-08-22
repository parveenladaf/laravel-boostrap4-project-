<?php

namespace App\Models;
use App\Models\Content;


use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user2';
    public $timestamps = false;

    public function create($data)
    {
        try {
            $author = new user();
            $author->name = $data['name'];
            $author->created_at = date('Y-m-d H:i:s');
            $author->updated_at = date('Y-m-d H:i:s');
            $author->save();
            $LastInsertId = $author->id;


            return 'hi';
        } catch (Exception $e) {
            throw $e;
        }
    }

}
