<?php
    require_once('../config/database.php');
    
    $myArray = array();
    if ($result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC")){
        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            $myArray[] = $row;
        }
        mysqli_close($conn);
        echo ("  \n ✿List Bags at the LE.CA Shop✿");
        echo json_encode($myArray);

    }