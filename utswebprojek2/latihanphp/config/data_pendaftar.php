<?php
require_once '../koneksi/koneksi.php';

try{
    $sql = 'SELECT * FROM data_pendaftar';
    $q = $database_connection->prepare($sql);
    $q->execute();

    $data = array();
    while ($row = $q->fetch(PDO::FETCH_ASSOC)){
        array_push($data,$row);
    }
    echo json_encode($data);
}catch(PDOException $e){
    die("Tidak Bisa Membuka Database $database_name : " . $e->getMessage());
}

?>