<?php
include_once('../includes/connect.php');

if( isset($_POST['prname']) && isset($_POST['title']) && isset($_FILES['image']) && isset($_POST['description']) ) {


    $prname = $_POST['prname'];
    $title = $_POST['title'];
    $image = $_FILES['image'];
    $description = $_POST['description'];

    $target         =  isset($_POST['target']) ? $_POST['target'] :'' ;
    $doner          =  isset($_POST['doner']) ? $_POST['doner'] :'' ;
    $startDate      =  isset($_POST['startDate']) ? $_POST['startDate'] : date('Y-m-d') ;
    $endDate        =  isset($_POST['endDate']) ? $_POST['endDate'] : date('Y-m-d') ;
    $notes          =  isset($_POST['notes']) ? $_POST['notes'] : '' ;

    $tmp_name = $image["tmp_name"];
    $guid = uniqid();
    $name = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR . 'images' .DIRECTORY_SEPARATOR . 'project' . DIRECTORY_SEPARATOR .basename($guid.'@'.$image["name"]);

    $image_ = $guid.'@'.$image["name"];

    if(move_uploaded_file($tmp_name, $name)){

        $sqlnew = "INSERT INTO tblprojects (prname, title, target, doner, startDate, endDate, image, description, notes)
                    VALUES ('$prname', '$title', '$target', '$doner', '$startDate', '$endDate', '$image_', '$description', '$notes')";

        if (mysqli_query($conn, $sqlnew)) {

            $record = array(
                'Id' => $conn->insert_id,
                'prname' => $prname,
                'title' => $title,
                'target' => $target,
                'doner' => $doner,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'image' => $image_,
                'description' => $description,
                'notes' => $notes,
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