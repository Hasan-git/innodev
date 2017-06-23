<?php
include_once('../connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tblnews WHERE Id = '$id'";
    $result = mysqli_query($conn, $sql);
}
elseif(isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];


    $sql = "SELECT * FROM tblnews WHERE MONTHNAME(newsDate) = '$month' AND YEAR(newsDate) = '$year'";
    $result = mysqli_query($conn, $sql);

}
else {
    $sql = "SELECT * FROM tblnews ORDER BY newsDate DESC";
    $result = mysqli_query($conn, $sql);
    }

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $Id=$row['Id'];
            $newsDate=$row['newsDate'];
            $title=$row['title'];
            $author=$row['author'];
            $text=$row['text'];
            $image=$row['image'];
            $video=$row['video'];

            $_news['data'][] = array(
                'Id' => $Id,
                'newsDate' => $newsDate,
                'title' => $title,
                'author' => $author,
                'text' => $text,
                'imageName' => $image,
                'video' => $video );
        }

        $news = json_encode($_news);
        header("HTTP/1.0 200 OK");
        echo $news;
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
