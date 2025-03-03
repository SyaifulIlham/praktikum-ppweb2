<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01201','uts'=>70,'uas'=>53,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01131','uts'=>82,'uas'=>82,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01140','uts'=>80,'uas'=>72,'tugas'=>78];

$arr_nilai = [$ns1,$ns2,$ns3,$ns4];

?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
 <tr>
<th>No</th><th>NIM</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($arr_nilai as $ns){
    echo '<tr>';
    echo '<td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
    echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
    echo '</tr>'; // Perbaikan tag penutup <tr/>
    $nomor++;
}
?>
</tbody>
</table>
