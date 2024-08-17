<?php
include("templates/header.php");
?>

<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <form action="edit" method="post">


        <div class="form-field mb-4">
            <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:" value="<?php echo $post['title']; ?>">
        </div>
        <div class="form-field mb-4">
            <textarea name="summary" class="form-control" id="" cols="30" rows="10" placeholder="Enter Summary:"><?php echo $post['summary']; ?></textarea>
        </div>
        <div class="form-field mb-4">
            <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post:"><?php echo $post['content']; ?></textarea>
        </div>
        <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <div class="form-field">
            <input type="submit" class="btn btn-primary" value="Submit" name="update">
        </div>


    </form>
</div>
<?php
include("templates/footer.php");
?>