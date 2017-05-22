<?php
include_once('../includes/connect.php');

if( isset($_POST['title']) && isset($_POST['text']) && isset($_FILES['imagefile']) ) {


    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_FILES['imagefile'];

    $author       =  isset($_POST['author']) ? $_POST['author'] :'' ;
    $newsDate   =  isset($_POST['startDate']) ? $_POST['startDate'] : date('Y-m-d') ;
    $video       =  isset($_POST['video']) ? $_POST['video'] : '' ;

    $tmp_name = $image["tmp_name"];
    $guid = uniqid();
    $name = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'news' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);

    $image_ = $guid.'@'.$image["name"];

    if(move_uploaded_file($tmp_name, $name)){

        $sqlnew = "INSERT INTO tblnews (newsDate, title, author, text, image, video)
                    VALUES ('$newsDate', '$title', '$author', '$text', '$image_', '$video')";

        if (mysqli_query($conn, $sqlnew)) {

            $record = array(
                'Id' => $conn->insert_id,
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
        }else {
            header("HTTP/1.0 500 Internal Server Error");
            // Primary key Duplication
            if(mysqli_errno($conn) == 1062)
                echo "$title already reserved. Please, Select a new Title";
            else
                echo "An error occurred";
        }
    }else{
        // FILED TO MOVE THE FILE
        header("HTTP/1.0 500 Internal Server Error");
        echo "Unable to upload the file";
    }
}else{

    header("HTTP/1.0 400 Bad Request");
    echo "Some fields are required";
}


mysqli_close($conn);
?>