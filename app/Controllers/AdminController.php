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
            return view('admin', 'admin', ['posts' => $posts]);
        } else {

            redirect("login");
        }
    }
    public function loginPage()
    {
        if (isset($_SESSION["user"])) {

            redirect("/project/admin");
        } else {

            return view('login', 'admin');
        }
    }
    public function loginCheck()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "admin" && $password == "pass") {
                $_SESSION["user"] = "admin";
                redirect("/project/admin");
            } else {
                $_SESSION['error'] = "Wrong credentials";
                redirect("/project/admin/login");
            }
        } else {
            redirect("/project/admin/login");
        }
    }
    public function logout()
    {

        session_destroy();
        redirect("login");
    }
    public function view()
    {

        $id = Request::getUrlId();

        if ($id == null) {
            dd("error : id not set");
        }
        $posts = (new Admin)->getOne('posts', $id);

        return view('view', 'admin', ['post' => $posts]);
    }
    public function editPage()
    {

        $id = Request::getUrlId();

        if ($id == null) {
            dd("error : id {$id} no valid");
        }
        $posts = (new Admin)->getOne('posts', $id);

        return view('edit', 'admin', ['post' => $posts]);
    }
    public function edit()
    {
        //dd(Request::values());
        $id = Request::postUrlId();
        //dd($id);
        if ($id == null) {
            dd("error : id {$id} no valid");
        }
        $data = Request::values();


        (new Admin)->updateOne('posts', $data);
        setSession('update', 'Post edited successfully!');

        redirect("/project/admin");
    }
    public function createPage()
    {
        return view('create', 'admin', [
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
            setSession('create', 'Post created successfully!');
            //dd("sucess");
            redirect('/project/admin');
        }
    }
    public function deleteUser()
    {

        $id = Request::postUrlId();
        (new Admin)->deleteOne('posts', $id);
        setSession('delete', 'Post deleted successfully!');
        redirect('/project/admin');
    }
}
