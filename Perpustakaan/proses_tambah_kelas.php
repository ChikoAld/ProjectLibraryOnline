<?php
if($_POST){
    $Nama_Kelas=$_POST['Nama_Kelas'];
    $Kelompok=$_POST['Kelompok'];
    if(empty($Nama_Kelas)){
        echo "<script>alert('Nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Kelompok)){
        echo "<script>alert('Kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (Nama_Kelas, Kelompok) value ('".$Nama_Kelas."','".$Kelompok."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tampil_kelas.php';</script>";
        }
    }
}
?>