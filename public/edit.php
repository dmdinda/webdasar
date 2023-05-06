<?php

if(isset($_GET['connect'])){
    // ambil id dari url atau method get
    $id = $_GET['./connect.php'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost","root","","mahasiswa");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM data_diri WHERE id='$id'";

    if ($result = mysqli_query($conn, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $nim = $user_data['nim'];
            $nama = $user_data['nama'];
            $jenis_kelamin = $user_data['jenis_kelamin'];
            $tempat_lahir = $user_data['tempat_lahir'];
            $tanggal_lahir = $user_data['tanggal_lahir'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost","root","","mahasiswa");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE data_diri SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir',alamat='$alamat' WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "<br>Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <?php if(isset($_GET['./connect.php'])): ?>
    <form action="edit.php" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>
</body>
</html>