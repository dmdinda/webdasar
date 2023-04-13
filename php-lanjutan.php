<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
        $tipe_data = "Santai Saja"; // tipe data string
        $tipe_data = 5; // tipe data integer
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
        $pecahan = 5.85; // tipe data float/pecahan
    ?>

    <h2>Saya menampilkan nilai pecahan ini <?=$pecahan?></h2>

    <?php
        $perbandingan = true; // tipe data boolean
       
        echo $perbandingan; //
        echo "<br/>";
    ?>

    <?php
        $provinsi[0] = "Jawa Timur";
        $provinsi[1] = "DKI Jakarta";
        $provinsi[2] = "IKN";
    
        echo var_dump ($provinsi);
    ?>

    <?php
        $hasil = 10+5;

        echo $hasil;
        echo "<br/>";
        $hasil = 10%2;

        echo $hasil;
        echo "<br/>";
        $hasil = 8;

        echo ++$hasil;
        echo "<br/>";

        define("SATU", 1);

        echo SATU;

        echo "<br/>";

        if($perbandingan == true) {
            echo "ucapkan selamat sore";
        } else {
            echo "ucapkan selamat malam";
        }

        echo "<br/>";

        switch($perbandingan) {
            case true:
                $pesan = "nasi goreng";
            break;
            case false:
                $pesan = "soto ayam";
            break;
            default:
                $pesan = "bakso";
        }

        echo $pesan;

        echo "<br/>";
        echo "<br/>";

        $provinsi = array("Jawa Timur",
                            "Jawa Tengah",
                            "Jawa Barat",
                            "DKI Jakarta",
                            "IKN");
        foreach ($provinsi as $key) {
            echo $key;
            echo "<br/>";
        }
    ?>

    <?php for ($i=0; $i<10; $i++) { ?>
        <h2>Dream World</h2>
    <?php } ?>

</body>
</html>