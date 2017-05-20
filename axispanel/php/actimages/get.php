<?php
include_once('../includes/connect.php');

if(isset($_GET['actTitle'])){
    $actTitle_ = $_GET['actTitle'];

    $sql = "SELECT * FROM tblactimages WHERE actTitle = '$actTitle_' ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

                $Id=$row['Id'];
                $actTitle=$row['actTitle'];
                $imageName=$row['imageName'];

                $_image[] = array(
                    'Id' => $Id,
                    'actTitle' => $actTitle,
                    'imageName' => $imageName
                );
            }

            $images = json_encode($_image);
            header("HTTP/1.0 200 OK");
            echo $images;
        }else{
            $record['data'] = array();
            $response = json_encode($record);
            echo $response;
        }

    }else{
        header("HTTP/1.0 500 Internal Server Error");
        echo "An error occurred";
    }
}else{
    header("HTTP/1.0 400 Bad Request");
    echo "Something went wrong";
}

mysqli_free_result($result);
mysqli_close($conn);
?>