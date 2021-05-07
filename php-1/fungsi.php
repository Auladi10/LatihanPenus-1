<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //deklarasi function
    function helo(){
        echo "Hallo Dunia";
    }
    //pemanggilan
    helo();
echo "<br>";
    //function dengan parameter
    function nama($nama, $alamat){
        echo "Hallo Nama Saya Adalah $nama, alamat saya di $alamat";
    }
    nama ("Arsal", "Tapos");

    echo "<br>";
    //function dengan return
    function tambah ($nilai1, $nilai2){
        return $nilai1 + $nilai2;
    }
    echo tambah(70,80);
    ?>
</body>
</html>