<?php
include_once('../connect.php');

$sql = "SELECT YEAR(newsDate) as year, MONTHNAME(newsDate) as month, count(*) count  FROM tblnews
        GROUP BY month,year
        ORDER BY year,month DESC";

$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            $month = $row['month'];
            $year = $row['year'];
            $count = $row['count'];

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

// mysqli_free_result($result);
mysqli_close($conn);
?>
