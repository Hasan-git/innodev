<?php
include_once('../includes/connect.php');

// var_dump($_POST);

if( isset($_POST['prname']) && isset($_POST['title']) && isset($_POST['Id']) && isset($_FILES['imagefile']) && isset($_POST['description']) ) {


    $Id = $_POST['Id'];
    $prname = $_POST['prname'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $target         =  isset($_POST['target']) ? $_POST['target'] :'' ;
    $doner          =  isset($_POST['doner']) ? $_POST['doner'] :'' ;
    $startDate      =  isset($_POST['startDate']) ? $_POST['startDate'] : date('Y-m-d') ;
    $endDate        =  isset($_POST['endDate']) ? $_POST['endDate'] : date('Y-m-d') ;
    $notes          =  isset($_POST['notes']) ? $_POST['notes'] : '' ;


    if(isset($_FILES['imagefile']) && $_FILES['imagefile']['size'] > 0){
        $image  =   $_FILES['imagefile'] ;
        $tmp_name = $image["tmp_name"];
        $guid = uniqid();
        $path = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'project' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);
        $image_ = $guid.'@'.$image["name"];

        move_uploaded_file($tmp_name, $path);
    }else{
        $image_ =$_POST['imageName'];
    }

    $updateQuery = "UPDATE tblprojects SET prname='$prname', title='$title', target='$target', doner='$doner', startDate='$startDate', endDate='$endDate', image='$image_', description='$description', notes='$notes' WHERE Id='$Id'";

    if(mysqli_query($conn, $updateQuery)){

        $record['data'] = array(
            'Id' => $Id,
            'prname' => $prname,
            'title' => $title,
            'target' => $target,
            'doner' => $doner,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'imageName' => $image_,
            'description' => $description,
            'notes' => $notes,
        );

        $response = json_encode($record);
        header("HTTP/1.0 200 OK");
        echo $response;

    }else{
       header("HTTP/1.0 500 Internal Server Error");
        // Primary key Duplication
        if(mysqli_errno($conn) == 1062)
            echo "$prname project already reserved. Please, Select a new name for this project";
        else
            echo "An error occurred";
    }
}else{

    header("HTTP/1.0 400 Bad Request");
    echo "Some fields are required";
}


mysqli_close($conn);
?>