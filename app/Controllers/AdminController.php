<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Request;

class AdminController
{
    public function index()
    {

        if (isset($_SESSION["user"])) {

            $posts = (new Admin)->getAll('posts');
            return view('admin', ['posts' => $posts]);
        } else {

            redirect("login");
        }
    }
    public function loginPage()
    {
        return view('login');
    }
    public function loginCheck()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "admin" && $password == "pass") {
                $_SESSION["user"] = "admin";
                redirect("/project/admin");
            }
        }
        view("login");
    }
    public function logout()
    {

        session_destroy();
        redirect("login");
    }
    public function view()
    {

        $id = Request::urlId();

        if ($id == null) {
            dd("error : id not set");
        }
        $posts = (new Admin)->getOne('posts', $id);

        return view('view', ['post' => $posts]);
    }
    public function editPage()
    {

        $id = Request::getUrlId();

        if ($id == null) {
            dd("error : id {$id} no valid");
        }
        $posts = (new Admin)->getOne('posts', $id);

        return view('edit', ['post' => $posts]);
    }
    public function edit()
    {
        //dd(Request::values());
        $id = Request::postUrlId();
        //dd($id);
        if ($id == null) {
            dd("error : id {$id} no valid");
        }
        $posts = (new Admin)->updateOne('posts', $id);

        return view('edit', ['post' => $posts]);
    }
    public function createPage()
    {
        return view('create', [
            'errors' => getSession('errors'),
            'old' => getSession('old'),
        ]);

        // Clear session errors after they've been used


    }
    public function create()
    {
        // Handle form submission
        if (Request::method() === 'POST') {
            // Get form data using the Request class
            $data = Request::values();

            // Perform validation (simplified example)
            $errors = validate($data);

            if (!empty($errors)) {
                // If there are errors, set them in the session and redirect back
                setSession('errors', $errors);
                setSession('old', $data); // Keep old input
                //dd($_SESSION);
                redirect('create');
            }

            // Save the post to the database (you'll implement this method)
            (new Admin)->store('posts', $data);

            // Set success message and redirect
            setSession('success', 'Post created successfully!');
            //dd("sucess");
            redirect('/project/admin');
        }
    }
}
