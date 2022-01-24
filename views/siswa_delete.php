<?php
//membuat query untuk hapus data
$sql="DELETE FROM siswa WHERE nis ='".$_GET['nis']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=siswa&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Siswa Berhasil Dihapus') window.location.assign('?page=siswa&actions=tampil');</scripr>";
}

