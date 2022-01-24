<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM siswa WHERE nis ='" . $_GET ['nis'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIS</td> <td><?= $data['nis'] ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td> <td><?= $data['nisn'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jeniskelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=siswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Siswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

