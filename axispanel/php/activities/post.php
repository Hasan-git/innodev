<?php
include_once('../includes/connect.php');

if( isset($_POST['prName']) && isset($_POST['title']) && isset($_POST['description']) && isset($_FILES['imagefile']) ) {


    $prName = $_POST['prName'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['imagefile'];

    $location       =  isset($_POST['location']) ? $_POST['location'] : '' ;
    $actDate        =  isset($_POST['actDate']) ? $_POST['actDate'] : date('Y-m-d') ;
    $video          =  isset($_POST['video']) ? $_POST['video'] : '' ;
    $atype          =  isset($_POST['atype']) ? $_POST['atype'] : '' ;


    $tmp_name = $image["tmp_name"];
    $guid = uniqid();
    $name = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'activity' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);

    $image_ = $guid.'@'.$image["name"];

    if(move_uploaded_file($tmp_name, $name)){

        $sqlnew = "INSERT INTO tblactivities (prName, actDate, title, location, description, image, video,atype)
                    VALUES ('$prName', '$actDate', '$title', '$location', '$description', '$image_', '$video','$atype')";

        if (mysqli_query($conn, $sqlnew)) {

            $record = array(
                'Id' => $conn->insert_id,
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
        }else {
        header("HTTP/1.0 500 Internal Server Error");
        // Primary key Duplication
        if(mysqli_errno($conn) == 1062)
            echo "$title record already reserved. Please, Select a new title";
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
