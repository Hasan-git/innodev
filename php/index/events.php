<?php
include_once('../connect.php');

    $edate = date('Y-m-d');

    $sql = "SELECT * FROM tblevents WHERE active = 1 AND eDate >= '$edate' ORDER BY Id DESC LIMIT 2";
    $result = mysqli_query($conn, $sql);


if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $Id = $row['Id'];
            $prName = $row['prName'];
            $eDate = $row['eDate'];
            $title = $row['title'];
            $location = $row['location'];
            $description = $row['description'];
            $image = $row['image'];
            $video = $row['video'];

            $event['data'][] = array(
                'Id' => $Id,
                'prName' => $prName,
                'eDate' => $eDate,
                'title' => $title,
                'location' => $location,
                'description' => $description,
                'imageName' => $image,
                'video' => $video);
        }

        $events = json_encode($event);
        header("HTTP/1.0 200 OK");
        echo $events;
    } else {
        $record['data'] = array();
        $response = json_encode($record);
        echo $response;
    }

} else {
    header("HTTP/1.0 500 Internal Server Error");
}

mysqli_free_result($result);
mysqli_close($conn);
?>