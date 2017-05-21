<?php
include_once('../includes/connect.php');

if( isset($_POST['prName']) && isset($_POST['title']) && isset($_POST['description']) && isset($_FILES['image']) ) {

    $Id = $_POST['Id'];
    $prName = $_POST['prName'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['imagefile'];

    $location       =  isset($_POST['location']) ? $_POST['location'] : '' ;
    $eDate   =  isset($_POST['eDate']) ? $_POST['eDate'] : date('Y-m-d') ;
    $video       =  isset($_POST['video']) ? $_POST['video'] : '' ;


    if(isset($_FILES['imagefile']) && $_FILES['imagefile']['size'] > 0){
        $image  =   $_FILES['imagefile'] ;
        $tmp_name = $image["tmp_name"];
        $guid = uniqid();
        $path = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'event' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);
        $image_ = $guid.'@'.$image["name"];

        move_uploaded_file($tmp_name, $path);
    }else{
        $image_ =$_POST['image'];
    }

    $updateQuery = "UPDATE tblevents SET prName='$prName', eDate='$eDate', title='$title', location='$location', description='$description', image='$image_', video='$video' WHERE Id='$Id'";

    if(mysqli_query($conn, $updateQuery)){


        $record['data'] = array(
            'Id' => $Id,
            'prName' => $prName,
            'eDate' => $eDate,
            'title' => $title,
            'location' => $location,
            'description' => $description,
            'image' => $image_,
            'video' => $video,
        );

        $response = json_encode($record);
        header("HTTP/1.0 200 OK");
        echo $response;

    }else{
        // echo mysqli_error($conn);
        header("HTTP/1.0 500 Internal Server Error");
        echo "An error occurred";
    }
}else{

    header("HTTP/1.0 400 Bad Request");
    echo "Some fields are required";
}


mysqli_close($conn);
?>