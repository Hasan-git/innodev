<?php
include_once('../connect.php');

$sql = "SELECT YEAR(newsDate) as nyear, MONTH(newsDate) AS nmonth, COUNT(*) AS nb FROM tblnews
        GROUP BY YEAR(newsDate), MONTH(newsDate)
        ORDER BY MONTH(newsDate) DESC
        LIMIT 10";
$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $month = $row['nmonth'];
            $year = $row['nyear'];
            $nb = $row['nb'];

            $_dates['data'][] = array(
                'month' => $month,
                'year' => $year,
                'ncount' => $nb,
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