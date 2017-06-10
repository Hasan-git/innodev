<?php
include_once('../connect.php');

$sql = "SELECT YEAR(newsDate) as nyear, MONTH(newsDate) AS nmonth FROM tblnews ORDER BY newsDate DESC";
$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $month = $row['nmonth'];
            $year = $row['nyear'];

            $_dates['data'][] = array(
                'month' => $month,
                'year' => $year,
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


mysqli_close($conn);
?>