<?php
include_once('../includes/connect.php');

if( isset($_POST['title'])  && isset($_POST['text']) && isset($_POST['newsDate']) && ( isset($_POST['imageName']) || isset($$_FILES['imagefile']) ) ) {


    $Id = $_POST['Id'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_FILES['imagefile'];

    $author       =  isset($_POST['author']) ? $_POST['author'] :'' ;
    $newsDate   =  isset($_POST['startDate']) ? $_POST['startDate'] : date('Y-m-d') ;
    $video       =  isset($_POST['video']) ? $_POST['video'] : '' ;


    if(isset($_FILES['imagefile']) && $_FILES['imagefile']['size'] > 0){
        $image  =   $_FILES['imagefile'] ;
        $tmp_name = $image["tmp_name"];
        $guid = uniqid();
        $path = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'news' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);
        $image_ = $guid.'@'.$image["name"];

        move_uploaded_file($tmp_name, $path);
    }else{
        $image_ =$_POST['imageName'];
    }

    $updateQuery = "UPDATE tblnews SET newsDate='$newsDate', title='$title', author='$author', text='$text', image='$image_', video='$video' WHERE Id='$Id'";
    if(mysqli_query($conn, $updateQuery)){


        $record['data'] = array(
            'Id' => $Id,
            'newsDate' => $newsDate,
            'title' => $title,
            'author' => $author,
            'text' => $text,
            'imageName' => $image_,
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