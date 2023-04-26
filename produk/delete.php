<?php
    require_once('../config/database.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id=$data->id;    
            $sql = $conn->prepare("DELETE FROM produk WHERE id=?");
            $sql->bind_param('i', $id);
            $sql->execute();
        
            if ($sql){
                echo json_encode(array('RESPONSE' => 'Data Behasil Terhapus'));
            }else{
                echo json_encode(array('RESPONSE' => 'Data Tidak Berhasil terhapus'));
            } 
    }else{
        echo"Failed";
    }
?>