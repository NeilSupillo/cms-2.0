<?php
include("templates/header.php");

?>
<div class="post-list mt-5">
    <div class="container">
        <?php foreach ($posts as $data) : ?>
            <div class="row mb-4 p-5 bg-light">
                <div class="col-sm-2">
                    <?php echo $data["date"]; ?>
                </div>
                <div class="col-sm-3">
                    <h2><?php echo $data["title"]; ?></h2>
                </div>
                <div class="text-container col-sm-5 text-break">
                    <?php echo $data["content"]; ?>
                </div>
                <div class="col-sm-2">
                    <a href="user/<?php echo $data['id']; ?>" class="btn btn-primary">READ MORE</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<?php
include("templates/footer.php");
?>