<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        return "<h1>This is a post view page and show the post id : ".$id."</h1>";
    }
}
