<?php
include_once('../connect.php');

if(isset($_GET['prName'])) {
    $prName = $_GET['prName'];

    $sql = "SELECT * FROM tblactivities WHERE prName = '$prName' ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);
}
elseif(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tblactivities WHERE Id = '$id'";
    $result = mysqli_query($conn, $sql);


}
else {
    $sql = "SELECT * FROM tblactivities ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);
}

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

        if(isset($_GET['id'])){
            $imagesQuery = "SELECT * FROM tblactimages WHERE actTitle = '$title' ";
            $imagesResult = mysqli_query($conn, $imagesQuery);
            if (mysqli_num_rows($imagesResult) > 0) {
                while($imagesRow = mysqli_fetch_assoc($imagesResult)) {
                    $images[] = array(
                        'Id' => $imagesRow['Id'],
                        'actTitle' => $imagesRow['actTitle'],
                        'imageName' => $imagesRow['imageName'],
                        );
                }
                $activity['data'][0]['images'] = $images;
            }
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
