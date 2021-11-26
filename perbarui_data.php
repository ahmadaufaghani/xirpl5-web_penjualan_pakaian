<?php
session_start();
    include './koneksi.php';

    $nama_pakaian = $_POST['nama_pakaian'];
    $harga_pakaian = $_POST['harga_pakaian'];
    $gambar_pakaian = $_FILES['gambar_pakaian'];


    $message = "";

    if($nama_pakaian=="") {
        $message = "Nama pakaian harus diisi!";
    } else if($harga_pakaian=="") {
        $message = "Harga pakaian harus diisi!!";
    } else if($gambar_pakaian=="") {
        $message = "Gambar pakaian harus diisi!";
    } else {
        if(isset($gambar_pakaian["tmp_name"]) || $gambar_pakaian["tmp_name"]=="") {
            $filePath = basename($gambar_pakaian["name"]);
            move_uploaded_file($gambar_pakaian["tmp_name"],$filePath);
    
            $conn->query("UPDATE pakaian SET gambar_pakaian='".$filePath."' WHERE id_pakaian = ".$id_pakaian);

        }

        $conn->query("UPDATE pakaian SET nama_pakaian='".$nama_pakaian."', harga_pakaian='".$harga_pakaian."' WHERE id_pakaian = ".$id_pakaian);
        $message = "Berhasil diperbaharui";
    }
    $_SESSION["message"] = $message; 
header("location:update.php");
$conn->close();
?>