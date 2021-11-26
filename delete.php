<?php
include './koneksi.php';

$id_pakaian = $_GET['id_pakaian'];

$sql = "DELETE FROM pakaian WHERE id_pakaian = '$id_pakaian'";
if($conn->query($sql)==TRUE) {
    header("location:index.php");
}
$conn->exit();

?>