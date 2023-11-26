<?php
require_once '../koneksi/koneksi.php';
$id = $_POST['id'];

try{
    $sql = 'DELETE FROM data_pendaftar WHERE id = ?';
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute([$id]);
    echo "Data deleted Succesfully";
}catch(PDOException){   
    die("Error deleting data: ".$err->getMessage());   
}
?>