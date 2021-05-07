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
    $hari = "Senin";
    if($hari == "Senin"){
        //hasil jika benar
        echo "I Love Monday";
    }else{
        //hasil jika salah   
        echo "ini bukan hari senin" ;
        }

        echo "<br>";
        $nilai = "60";
        if($nilai == "50"){
            //hasil akan lulus
            echo "Siswa Lulus";
        }else{
            //hasil tidak lulus
            echo "Siswa Tidak Lulus";
        }

        echo "<br>";

        $nilai = 100;
        if($nilai <= 85){
            echo "Nilai anda B";
        }else if ($nilai <= 60){
            echo "Nilai anda C";
        }else {
            echo "Nilai anda A";
        }

        echo "<br>";

        
?>
</body>
</html>