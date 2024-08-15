<?php

namespace App\Controllers;

use App\Request;
use App\Models\Post;


class PostsController
{
    public function getAll()
    {
        // posts is table name;
        $posts = (new Post)->getAllPosts('posts');
        return view('index', ['posts' => $posts]);
    }
    public function getOne()
    {
        // posts is table name;
        $id = Request::getId();
        if ($id == null) {
            dd("error : id not set");
        }
        $post = (new Post)->getOnePost('posts', $id);
        return view('read', ['post' => $post]);
    }
    public function store()
    {
        //(new Post)->storePost(Request::values());
    }
}
