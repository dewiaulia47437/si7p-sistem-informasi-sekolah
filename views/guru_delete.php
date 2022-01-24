<?php
//membuat query untuk hapus data
$sql="DELETE FROM guru WHERE nip ='".$_GET['nip']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=guru&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Guru Berhasil Dihapus') window.location.assign('?page=guru&actions=tampil');</scripr>";
}

