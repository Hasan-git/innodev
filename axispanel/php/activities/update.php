<?php
include_once('../includes/connect.php');

if( isset($_POST['prName']) && isset($_POST['title']) && isset($_POST['description']) &&  ( isset($_FILES['imagefile']) || isset($_POST['imageName']) ) ) {

    $Id = $_POST['Id'];
    $prName = $_POST['prName'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['imagefile'];

    $location       =  isset($_POST['location']) ? $_POST['location'] : '' ;
    $actDate        =  isset($_POST['actDate']) ? $_POST['actDate'] : date('Y-m-d') ;
    $video          =  isset($_POST['video']) ? $_POST['video'] : '' ;
    $atype          =  isset($_POST['atype']) ? $_POST['atype'] : '' ;


    if(isset($_FILES['imagefile']) && $_FILES['imagefile']['size'] > 0){
        $image  =   $_FILES['imagefile'] ;
        $tmp_name = $image["tmp_name"];
        $guid = uniqid();
        $path = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'activity' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);
        $image_ = $guid.'@'.$image["name"];

        move_uploaded_file($tmp_name, $path);
    }else{
        $image_ =$_POST['imageName'];
    }

    $updateQuery = "UPDATE tblactivities SET prName='$prName', actDate='$actDate', title='$title', location='$location', description='$description', image='$image_', video='$video', atype='$atype' WHERE Id='$Id'";

    if(mysqli_query($conn, $updateQuery)){


        $record['data'] = array(
            'Id' => $Id,
            'prName' => $prName,
            'actDate' => $actDate,
            'title' => $title,
            'location' => $location,
            'description' => $description,
            'imageName' => $image_,
            'video' => $video,
            'atype' => $atype,
        );

        $response = json_encode($record);
        header("HTTP/1.0 200 OK");
        echo $response;

    }else{
        header("HTTP/1.0 500 Internal Server Error");
        // Primary key Duplication
        if(mysqli_errno($conn) == 1062)
            echo "$title record already reserved. Please, Select a new title";
        else
            echo "An error occurred";
    }
}else{

    header("HTTP/1.0 400 Bad Request");
    echo "Some fields are required";
}


mysqli_close($conn);
?>
