<?php
include_once('../includes/connect.php');

if(isset($_POST['Id']) ) {

    $Id = $_POST['Id'];

    $deleteQuery = "DELETE FROM tblactimages WHERE Id = '$Id'";

    if (mysqli_query($conn, $deleteQuery)) {

        header("HTTP/1.0 200 OK");
        echo 'deleted';
    }
    else {
        header("HTTP/1.0 500 Internal Server Error");
        echo "An error occurred";
    }
}else{

    header("HTTP/1.0 400 Bad Request");
    echo "Something went wrong";
}


mysqli_close($conn);
?>