<?php
 define("PHI", 3.14);
 define('DBNAME', 'Inventori');
 define("Dbserver", "localhost");

 $jari = 10;
 $luas = PHI * $jari * $jari;
 $kel = 2 * PHI * $jari;

 echo " luas lingkaran = " .$luas. "cm";
 echo "<br/> keliling = " .$kel. "cm";

?>
<hr>
<?php
echo "nama database : " .DBNAME;
echo "lokasi db : " .Dbserver;
?>