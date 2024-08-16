<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController
{
    public function index()
    {

        if (isset($_SESSION["user"])) {

            $posts = (new Admin)->getAll('posts');
            return view('admin', ['posts' => $posts]);
            dd("view");
        } else {

            redirect("login");
        }
    }
    public function login()
    {
        return view('read');
    }
}
