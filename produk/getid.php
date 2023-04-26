<?php      
    require_once('../config/database.php');
    
    $myArray = array();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        if($result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id")){
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo ("  \n ✿List Bags at the LE.CA Shop✿");
            echo json_encode($myArray);
        }
    }
?>