<?php
include("templates/header.php");
?>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <form id="blogForm" action="create" method="post">
        <!-- Title Field -->
        <div class="form-field mb-4">
            <input type="text" class="form-control" name="title" id="title"
                placeholder="Enter Title:"
                value="<?= htmlspecialchars($old['title'] ?? '') ?>">
            <span class="error"><?= htmlspecialchars($errors['title'] ?? '') ?></span>
        </div>

        <!-- Summary Field -->
        <div class="form-field mb-4">
            <textarea name="summary" class="form-control" id="summary" cols="30" rows="10"
                placeholder="Enter Summary:"><?= htmlspecialchars($old['summary'] ?? '') ?></textarea>
            <span class="error"><?= htmlspecialchars($errors['summary'] ?? '') ?></span>
        </div>

        <!-- Content Field -->
        <!-- Content Field -->
        <div class="form-field mb-4">
            <textarea name="content" class="form-control" id="content" cols="30" rows="10"
                placeholder="Enter Post:"><?= htmlspecialchars($old['content'] ?? '') ?></textarea>
            <span class="error"><?= htmlspecialchars($errors['content'] ?? '') ?></span>
        </div>

        <!-- Hidden Date Field -->
        <input type="hidden" name="date" value="<?= date("Y/m/d"); ?>">

        <!-- Submit Button -->
        <div class="form-field">
            <input type="submit" class="btn btn-primary" value="Submit" name="create">
        </div>

        <!-- Form Response -->
        <div id="formResponse"></div>
    </form>
</div>
<?php
unsetSession('errors');
unsetSession('old');
unsetSession('success');

include("templates/footer.php");
?>