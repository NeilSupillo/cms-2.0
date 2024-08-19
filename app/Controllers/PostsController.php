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
        //dd($posts);
        return view('index', 'home', ['posts' => $posts]);
    }
    public function getOne()
    {
        // posts is table name;
        //$id = Request::getId();
        $id = Request::getUrlId();

        $post = (new Post)->getOnePost('posts', $id);
        check_data($post);
        return view('read', 'home', ['post' => $post]);
    }
}
