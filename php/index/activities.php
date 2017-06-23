<?php
include_once('../connect.php');

    $sql = "SELECT * FROM tblactivities ORDER BY Id DESC LIMIT 8";
    $result = mysqli_query($conn, $sql);


if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $Id=$row['Id'];
            $prName=$row['prName'];
            $actdate=$row['actDate'];
            $title = $row['title'];
            $location = $row['location'];
            $description = $row['description'];
            $image = $row['image'];
            $atype = $row['atype'];
            $video = $row['video'];

            $activity['data'][] = array(
                'Id' => $Id,
                'prName' => $prName,
                'actDate' => $actdate,
                'title' => $title,
                'location' => $location,
                'description' => $description,
                'imageName' => $image,
                'atype' => $atype,
                'video' => $video);
        }

        $activities = json_encode($activity);
        header("HTTP/1.0 200 OK");
        echo $activities;
    }else{
        $record['data'] = array();
        $response = json_encode($record);
        echo $response;
    }

}else{
    header("HTTP/1.0 500 Internal Server Error");
}

mysqli_free_result($result);
mysqli_close($conn);
?>
