<?php
include("templates/header.php");
?>

<div class="post w-100 bg-light p-5">
    <?php
    if ($post) {
    ?>
        <h1><?php echo  $post['title']; ?></h1>
        <p><?php echo $post['date']; ?></p>
        <p><?php echo $post['content']; ?></p>
    <?php

    } else {
        echo "Post Not Found";
    }
    ?>
</div>

<?php
include("templates/footer.php");
?>