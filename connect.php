<?php

    $con = new mysqli ("localhost", "root", "", "imageuploadproject");

    if (!$con){
        die(mysqli_error($con));
    }


?>