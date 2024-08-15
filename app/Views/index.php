<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Validation with AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <form id="blogForm" action="posts/store" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <span class="error" id="titleError"></span>
        <br><br>

        <label for="summary">Summary:</label>
        <input type="text" id="summary" name="summary">
        <span class="error" id="summaryError"></span>
        <br><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea>
        <span class="error" id="contentError"></span>
        <br><br>

        <button type="submit">Submit</button>
        <div id="formResponse"></div>
    </form>

    <script>
        $(document).ready(function() {
            $("#blogForm").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                // Clear previous errors
                $(".error").text("");
                $("#formResponse").text("");

                // Validate Title
                const title = $("#title").val().trim();
                if (title === "") {
                    $("#titleError").text("Title is required.");
                    isValid = false;
                } else if (title.length < 5) {
                    $("#titleError").text("Title must be at least 5 characters long.");
                    isValid = false;
                }

                // Validate Summary
                const summary = $("#summary").val().trim();
                if (summary === "") {
                    $("#summaryError").text("Summary is required.");
                    isValid = false;
                } else if (summary.length < 5) {
                    $("#summaryError").text("Summary must be at least 10 characters long.");
                    isValid = false;
                }

                // Validate Content
                const content = $("#content").val().trim();
                if (content === "") {
                    $("#contentError").text("Content is required.");
                    isValid = false;
                } else if (content.length < 5) {
                    $("#contentError").text("Content must be at least 50 characters long.");
                    isValid = false;
                }

                // If the form is valid, submit using AJAX
                if (isValid) {
                    $.ajax({
                        url: 'posts/store',
                        type: 'POST',
                        data: {
                            title: title,
                            summary: summary,
                            content: content
                        },
                        success: function(response) {
                            console.log("Server Response: ", response); // Check what is returned here
                            $("#formResponse").text("Blog post submitted successfully!")
                                .removeClass('error').addClass('success');
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: ", xhr.responseText, status, error);
                            $("#formResponse").text("An error occurred: " + xhr.responseText)
                                .removeClass('success').addClass('error');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>