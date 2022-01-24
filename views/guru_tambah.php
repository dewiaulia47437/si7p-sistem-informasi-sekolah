<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="" placeholder="Inputkan NIP">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="" placeholder="Inputkan Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="golongan" class="form-control" id="" placeholder="Inputkan Golongan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" class="form-control" id="" placeholder="Inputkan Jenis Kelamin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="" placeholder="Inputkan Jabatan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Simpan Data Guru</button>
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
    $golongan=$_POST['golongan'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $jabatan=$_POST['jabatan'];
    //buat sql
    $sql="INSERT INTO guru VALUES ('$nip','$nama','$golongan','$jeniskelamin','$jabatan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Pembeli Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
