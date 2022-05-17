<?php

namespace App\Http\Controllers;


use App\Models\Post;

class Postcontroller extends Controller {

public function index(){
//$name = 'Ilze';
//dd($name);
$post = Post::find(1);
dd($post->title);

}

}