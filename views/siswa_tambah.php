<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" class="form-control" nis="" placeholder="Inputkan NIS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nisn" class="col-sm-3 control-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" name="nisn" class="form-control" nis="" placeholder="Inputkan NISN">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" nis="" placeholder="Inputkan Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" class="form-control" nis="" placeholder="Inputkan Jenis Kelamin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" nis="" placeholder="Inputkan Kelas">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Simpan Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=siswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $kelas=$_POST['kelas'];
    //buat sql
    $sql="INSERT INTO siswa VALUES ('$nis','$nisn','$nama','$jeniskelamin','$kelas')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data siswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=siswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
