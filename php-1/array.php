<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>Berlatih Array</h1>, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        
        <?php 
            echo "<h3> Soal 1 </h3>";
            /* 
                SOAL NO 1
                Kelompokkan nama-nama di bawah ini ke dalam Array.
                Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
                Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
            */
            $kids = array ("mike","Dustin","Will","Lucas","Max","Eleven");
            print_r($kids);
            $adults = array ("Hopper","Nancy","Joyce","Jonathan","Murray");
            print_r($adults);
            ?>
<?php            
            echo "<h3> Soal 2</h3>";
/*
Soal No 2 
Tunjukan panjang array di soal no 1 dan tampilkan isi dari masing-masing array
*/
$kids = array ("mike","Dustin","Will","Lucas","Max","Eleven");
echo count($kids);
$adults = array ("Hopper","Nancy","Joyce","Jonathan","Murray");
echo count($adults);
echo"<br>";
echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        // Lanjutkan

        echo "</ol>";

?>

<?php
echo "<h3> Soal 3</h3>";
/*
Soal No 3
Name: "Will Byers"
Age: 12,
Aliases: "Will the Wise"
Status: "Alive"

Name: "Mike Wheeler"
Age: 12,
Aliases: "Dungeon Master"
Status: "Alive"

Name: "Jim Hopper"
Age: 43,
Aliases: "Chief Hopper"
Status: "Deceased"

Name: "Eleven"
Age: 12,
Aliases: "El"
Status: "Alive"

*/
 $biodata1 = ["nama" => "Will Byers",
 "Age"=>"12",
 "Aliases"=>"Will the Wise",
 "Status"=>"Alive"];
 print_r($biodata1);
 echo "<br>";
 $biodata2 = ["nama" => "Mike Wheeler",
 "Age"=>"12",
 "Aliases"=>"Dungeon Master",
 "Status"=>"Alive"];
 print_r($biodata2);
 echo "<br>";
 $biodata3 = ["nama" => "Jim Hopper",
 "Age"=>"43",
 "Aliases"=>"Chief Hopper",
 "Status"=>"Deceased"];
 print_r($biodata3);
 echo "<br>";
 $biodata4 = ["nama" => "Eleven",
 "Age"=>"12",
 "Aliases"=>"El",
 "Status"=>"Alive"];
 print_r($biodata4);
?>


</body>
</html>