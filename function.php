
<?php
function penjumlahan($a, $b) {
$jumlah =$a+$b;
return $jumlah;
}
function pengurangan ($a, $b) {
$kurang = $a-$b;
return $kurang;
}
function perkalian ($a, $b) {
$kali = $a*$b;
return $kali;
}
function pembagian ($a, $b) {
$bagi = $a/$b;
return $bagi;
}
$c = 8 ;
$d =6 ;
$e=penjumlahan ($c , $d);
$f=pengurangan ($c , $d);
$g=perkalian ($c , $d);
$h=pembagian ($c , $d);
print "nilai a=$c";
print "<br>";
print "nilai b=$d";
print "<br>";
print "<b>hasil</b>";
print "<br>";
print "Penjumlahan = $e";
print "<br>";
print "pengurangan = $f";
print "<br>";
print "perkalian = $g";
print "<br>";
print "pembagian = $h";
?>