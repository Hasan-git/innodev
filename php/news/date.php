<?php
include_once('../connect.php');

$sql = "SELECT newsDate, COUNT(Id) AS nbof FROM tblnews ORDER BY newsDate DESC";
$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $month = MONTH($row['newsDate']);
            $year = YEAR($row['newsDate']);
            $count = $row['nbof'];

            $_dates['data'][] = array(
                'month' => $month,
                'year' => $year,
                'count' => $count,
                 );
        }

        $dates = json_encode($_dates);
        header("HTTP/1.0 200 OK");
        echo $dates;
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