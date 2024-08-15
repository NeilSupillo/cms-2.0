<?php

namespace App\Controllers;

class DashboardController
{
    public function index()
    {
        return view('index');
    }
    public function allPosts()
    {
        return view('read');
    }
}
