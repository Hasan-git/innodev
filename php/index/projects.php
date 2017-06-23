<?php
include_once('../connect.php');

$sql = "SELECT * FROM tblprojects ORDER BY Id DESC LIMIT 2";
$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $Id=$row['Id'];
            $prname=$row['prname'];
            $title=$row['title'];
            $target=$row['target'];
            $doner=$row['doner'];
            $startDate=$row['startDate'];
            $endDate=$row['endDate'];
            $image=$row['image'];
            $description=$row['description'];
            $notes=$row['notes'];

            $_project['data'][] = array(
                'Id' => $Id,
                'prname' => $prname,
                'title' => $title,
                'target' => $target,
                'doner' => $doner,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'imageName' => $image,
                'description' => $description,
                'notes' => $notes );
        }

        $projects = json_encode($_project);
        header("HTTP/1.0 200 OK");
        echo $projects;
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