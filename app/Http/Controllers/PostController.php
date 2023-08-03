<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function index()
    {
        $view = view('data', [
            "posts" => Post::all()
        ]);
        return $view;
    }
}
