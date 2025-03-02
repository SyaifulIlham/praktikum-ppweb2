<?php
$ar = ["mangga","pisang","jambu","jeruk"];

echo $ar[1];

echo "<br/>jumlah buah = ". count ($ar);
echo "<ol>";
foreach ($ar as $buah){
 echo "<li>" .$buah. "</li>";
}
echo "</ol>";
$ar [] = "Durian"; 
unset($ar[1]);

$ar[2] = "manggis";

echo "<ul>";
sort($ar);
foreach($ar as $Buah => $v ){
    echo "<li> buah ke- " .$Buah ." adalah "  .$v. "</li>";
};
echo "</ul>";
?>