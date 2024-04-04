<?php
require_once "operations.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center">
            <form class="w-50" action="display.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <?php inputfields("Username", "username", "", "text", "username", "username", "Username",)?>
                    <?php inputfields("Mobile Number", "mobilenumber", "", "text", "mobilenumber", "mobilenumber", "Mobile Number",)?>
                    <?php inputfields("", "file", "", "file", "img", "img", "Upload Image",)?>

                    <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>