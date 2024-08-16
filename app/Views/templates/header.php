<?php
//session_start();
?>

<?php
include("head.php");
?>

<body>
    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar bg-dark vh-100">
            <h1 class="bg-primary p-4"><a href="./index.php" class="text-light text-decoration-none">Dashboard</a></h1>
            <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"><strong>Add New Post</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../home/" class="text-light text-decoration-none"><strong>View Website</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>

            </div>
        </div>