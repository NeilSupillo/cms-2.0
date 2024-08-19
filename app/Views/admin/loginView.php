<?php
include("templates/head.php");
?>

<body class="bg-dark">

    <div class="container mt-5" style="max-width:600px">
        <h1 class="text-light mb-3">Log in</h1>
        <div class="login-form">
            <form action="login" method="post">
                <div class="form-field mb-3">
                    <input class="form-control" type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-3">
                    <input class="form-control" type="password" name="password" id="" placeholder="Password">
                </div>
                <?php
                if (isset($_SESSION['error'])) {
                    echo '<p class="text-danger">' . $_SESSION['error'] . '</p>';
                    unset($_SESSION['error']);
                }
                ?>

                <div class="form-field mb-3">
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>

            </form>
        </div>
        <p class="text-light">username: admin</p>
        <p class="text-light">password: pass</p>
    </div>

</body>

</html>