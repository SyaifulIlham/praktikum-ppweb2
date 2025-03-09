<?php
 $proses = $_GET["proses"];
    $nama = $_GET["name"];
 $mata_kuliah = $_GET["matkul"];
    $uts = $_GET["uts"];
 $uas = $_GET["Uas"];
    $praktikum = $_GET["praktikum"];

 echo " Proses = " .$proses;
    echo "<br/> Nama : " .$nama;
    echo "<br/> mata kuliah : " .$mata_kuliah;
 echo "<br/> Nilai Uts : " .$uts;
    echo "<br/> Nilai Uas : " .$uas;
 echo "<br/> Nilai praktikum : " .$praktikum;
?>