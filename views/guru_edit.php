<?php
$nip=$_GET['nip'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM guru WHERE nip ='$nip'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>"class="form-control" id="" placeholder="NIP">
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="" placeholder="Nama">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="golongan" value="<?=$data['golongan']?>"class="form-control" id="" placeholder="Golongan">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenip Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" value="<?=$data['jeniskelamin']?>"class="form-control" id="" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control" id="" placeholder="Jabatan">
                            </div>
                        </div>
                    
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-edit"></span> Update Data Guru</button>
                            </div>
                        </div>
                        </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Guru
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
	$nama=$_POST['nama'];
    $jeniskelamin=$_POST['jeniskelamin'];
	$jabatan=$_POST['jabatan'];
    
    //buat sql
    $sql="UPDATE guru SET nip='$nip',nama='$nama',nama='$nama',jeniskelamin='$jeniskelamin',jabatan='$jabatan' WHERE nip ='$nip'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



