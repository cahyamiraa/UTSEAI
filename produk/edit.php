<?php
require_once('../config/database.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->id != null) {
    $id           = $data->id;
    $bag_name  = $data->bag_name;
    $price       = $data->price;
    $bag_type  = $data->bag_type;
    $stock         = $data->stock;

    $sql = $conn->prepare("UPDATE produk SET bag_name=?, bag_type=?, price=?, stock=? WHERE id=?");
    $sql->bind_param('ssddd', $bag_name, $bag_type, $price, $stock, $id);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'Data Telah Terubah'));
    } else {
        echo json_encode(array('RESPONSE' => 'Data Gagal Terubah'));
    }
} else {
    echo "Failed";
}
 