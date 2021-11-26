<?php
session_start();
if(isset($_POST["nama_pakaian"])) {
    include './koneksi.php';

    $nama_pakaian = $_POST['nama_pakaian'];
    $harga_pakaian = $_POST['harga_pakaian'];
    $gambar_pakaian = $_FILES['gambar_pakaian'];

    $message = "";

    if($nama_pakaian=="") {
        $message = "Nama pakaian harus diisi!";
    } else if($harga_pakaian=="") {
        $message = "Harga pakaian harus diisi!!";
    } else if(!isset($gambar_pakaian["tmp_name"]) || $gambar_pakaian["tmp_name"]=="") {
        $message = "Gambar pakaian harus diisi!";
    } else {
        $filePath = basename($gambar_pakaian["name"]);
        move_uploaded_file($gambar_pakaian["tmp_name"],$filePath);

        $conn->query("INSERT INTO pakaian VALUES (null,'".$nama_pakaian."','".$harga_pakaian."','".$filePath."')");
        $message = "Berhasil ditambahkan";
    }
    $_SESSION["message"] = $message; 
}
header("location:insert.php");
$conn->close();
?>