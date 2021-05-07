<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Berlatih String PHP</h1>
    <?php  
    $first_sentence = "Hello PHP!";// Panjang String 10, Jumlah Kata 2
    $Panjang_string = strlen($first_sentence);
    echo "Panjang String : $Panjang_string";
    echo "<br>";
    $second_sentence = "I'm ready for the challenge";
    $Panjang_string = strlen($second_sentence);
    echo "Panjang String : $Panjang_string";
    echo "<br>";
    $jml_kata = str_word_count($second_sentence);
    echo "Jumlah kata : $jml_kata";
    echo "<br>";
?>
 <?php  
    echo "<h3> Soal No 2</h3>";
    $string2 = "I Love PHP";

echo "<label>String: </label> \"$string2\" <br>";
echo "Kata Pertama:". substr($string2, 0, 1) . "<br>";
//Lanjutkan di bawah ini
echo "Kata Kedua: ". substr($string2, 2, 5) . "<br>";
echo "Kata Ketiga: ". substr($string2, 7, 10) . "<br>";

echo "<h3> Soal No 3 </h3>";
$string3 = "PHP is old but sexy!";
echo "String: \"$string3\" "; 
// OUTPUT : "PHP is old but sexy"

    ?>
</body>
</html>