<?php
require_once('../config/database.php');
if (isset($_POST['bag_name']) && isset($_POST['bag_type']) && isset($_POST['price']) && isset($_POST['stock'])) {

    $bag_name    = $_POST['bag_name'];
    $bag_type   = $_POST['bag_type'];
    $sql = $conn->prepare("INSERT INTO produk (bag_name, bag_type, price, stock) VALUES (?,?,?,?)");
    $price     = $_POST['price'];
    $stock     = $_POST['stock'];

    $sql->bind_param('ssdd', $bag_name, $bag_type, $price, $stock);
    $sql->execute();

    if ($sql) {
        echo json_encode(array('RESPONSE' => 'Berhasil Menambah Data'));
    } else {
        echo "Failed";
    }
}