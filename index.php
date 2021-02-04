<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">

    <form action="data_mahasiswa.php" method="get">
	<label>Search :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="from-item">
                
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control col-md-12" placeholder="Masukan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control col-md-9" placeholder="Masukan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control col-md-9" placeholder="Masukan Jenis Kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control col-md-9" placeholder="Masukan Kode Pos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

    include "koneksi.php";
     if(isset($_POST['simpan']))
    {
        $npm            =$_POST['npm'];
        $nama           =$_POST['nama'];
        $tempat_lahir   =$_POST['tempat_lahir'];
        $tanggal_lahir  =$_POST['tanggal_lahir'];
        $jenis_kelamin  =$_POST['jenis_kelamin'];
        $alamat         =$_POST['alamat'];
        $kode_pos       =$_POST['kode_pos'];
        
        $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('',
                 '$npm','$nama','$tempat_lahir',' $tanggal_lahir','$jenis_kelamin','$alamat','$kode_pos'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-datamahasiswa/data_mahasiswa.php'>";
    }

?>