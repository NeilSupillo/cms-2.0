<?php
include("templates/header.php");
?>
<style>

</style>

<div class="posts-list w-100 p-5">
    <?php
    $alerts = ["create", "update", "delete"];

    foreach ($alerts as $alert) {
        if (isset($_SESSION[$alert])) {
    ?>
            <div class="alert alert-success">
                <?php echo $_SESSION[$alert]; ?>
            </div>
    <?php
            unset($_SESSION[$alert]);
        }
    }
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:15%;">Publication Date</th>
                <th style="width:15%;">Title</th>
                <th style="width:45%;">Article</th>
                <th style="width:25%;">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($posts as $data) : ?>
                <tr>
                    <td><?php echo $data["date"] ?></td>
                    <td><?php echo $data["title"] ?></td>
                    <td><?php echo $data["summary"] ?></td>
                    <td>
                        <a class="btn btn-info" href="admin/view?id=<?php echo $data["id"] ?>">View</a>
                        <a class="btn btn-warning" href="admin/edit?id=<?php echo $data["id"] ?>">Edit</a>
                        <a class="btn btn-danger" href="" onclick="showPopup(<?php echo $data["id"] ?>)">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<div id="overlay" class="overlay"></div>

<!-- Pop-up -->
<div id="popup" class="popup">
    <p>Are you sure you want to delete this item?</p>
    <button onclick="confirmDelete()" id="confirmDeleteButton">Yes</button>
    <button onclick="hidePopup()">No</button>
</div>
<?php
include("templates/footer.php");
?>