<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobilenumber = $_POST['mobilenumber'];
    $file = $_FILES['file'];
    // echo $username."<br>";
    // echo $mobilenumber."<br>";
    // print_r($file)."<br>";// to print array we shold always use print_r();

    $imagefilename= $file['name'];
    // print_r($imagefilename);
    // echo "<br>";
    $imagefileerror= $file['error'];
    // print_r($imagefileerror);
    // echo "<br>";
    $imagefiletmp_name= $file['tmp_name'];
    // print_r($imagefiletmp_name);
    // echo "<br>";

    $filename_separate = explode('.',$imagefilename);// to seperate the type form the name
    // print_r($filename_separate);
    // echo "<br>";

    //first method
    // $file_extension =strtolower($filename_separate[1]);
    // print_r($file_extension);
    // echo "<br>";

    //second method
    $file_extension =strtolower(end($filename_separate));
    // print_r($file_extension);
    // echo "<br>";

    $extension = array('jpeg','jpg','png');
    if(in_array($file_extension, $extension)){
        $upload_image='images/'.$imagefilename;
        //method to move the uploaded file
        move_uploaded_file($imagefiletmp_name, $upload_image);
        $sql ="INSERT INTO registration (username, mobile, file) VALUES ('$username', '$mobilenumber', '$upload_image')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data inserted successfully
          </div>';
        } else {
            die(mysqli_error($con));
        }
        
    }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>display data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img{
            width:100px;
        }
    </style>
  </head>
  <body>
    <h1 class="text-center my-4">User data</h1>
    <div class="container my-3 d-flex justify-content-center">
                <table class="table table-bordered w-50">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">sl no</th>
                        <th scope="col">Username</th>
                        <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM registration";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $name = $row['username'];
                                $image = $row['file'];
                                echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td><img src='.$image.'></td>
                                </tr>';
                            }
                        ?>
                        
                    </tbody>
            </table>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>