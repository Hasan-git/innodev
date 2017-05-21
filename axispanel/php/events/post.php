<?php
include_once('../includes/connect.php');

if( isset($_POST['prName']) && isset($_POST['title']) && isset($_POST['description']) && isset($_FILES['image']) ) {

    $prName = $_POST['prName'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['imagefile'];

    $location       =  isset($_POST['location']) ? $_POST['location'] : '' ;
    $eDate   =  isset($_POST['eDate']) ? $_POST['eDate'] : date('Y-m-d') ;
    $video       =  isset($_POST['video']) ? $_POST['video'] : '' ;

    $tmp_name = $image["tmp_name"];
    $guid = uniqid();
    $name = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'event' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);

    $image_ = $guid.'@'.$image["name"];

    if(move_uploaded_file($tmp_name, $name)){

        $sqlnew = "INSERT INTO tblactivities (prName, eDate, title, location, description, image, video)
                    VALUES ($prName, '$eDate', '$title', '$location', '$description', '$image_', '$video')";

        if (mysqli_query($conn, $sqlnew)) {

            $record = array(
                'Id' => $conn->insert_id,
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
        }else {
            header("HTTP/1.0 500 Internal Server Error");
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