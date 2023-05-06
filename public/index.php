<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="col-lg-11 col-xxl-4 my-5 mx-auto">
   <h1>DAFTAR DATA DIRI MAHASISWA</h1>
    <div class="col align-self-end">
        <a class="btn btn-small btn-success" href="./tambah.php"><i class="bi bi-clipboard-plus"></i> Tambah</a>
    </div>
    <div id="main" class="d-grid">
        
        <?php 
            // menyematkan modul koneksi database.
            require_once "./connect.php"; 

            $sql = "SELECT * FROM `data_diri`";
        ?>
        
        <table class="table table-striped">
            <thead>
            <tr>
                <td><b>NO.</b></td>
                <td><b>NIM</b></td>
                <td><b>NAMA</b></td>
                <td><b>JENIS KELAMIN</b></td>
                <td><b>TEMPAT LAHIR</b></td>
                <td><b>ANGGAL LAHIR</b></td>
                <td><b>ALAMAT</b></td>
                <td><b>AKSI</b></td>
            </tr>
            </thead>
            <tbody>
                
        <?php

            $no = 1;

            if($result = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $no; $no++ ?></td>
                <td><?php echo $row['nim'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['tempat_lahir'] ?></td>
                <td><?php echo $row['tanggal_lahir'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><a class="btn btn-small btn-warning" href="./edit.php"><i class="bi bi-pencil-square"></i> Ubah</a> | 
                    <a class="btn btn-small btn-danger" href="./hapus.php"><i class="bi bi-trash"></i> Hapus</a></td>
            </tr>
        <?php
                }
            }
        ?>
                
            </tbody>
        </table>
    </div>
</div>
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
</body>
</html>