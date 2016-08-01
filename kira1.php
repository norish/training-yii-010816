 <?php
$hargafd = 325.60;
$hargagj = 545.40;
$hargaft = 200.00;
$service = 0.10;
$gst     = 0.06;
$komagent = 0.20;
$komahli = 0.10;
$komstokist = 0.30;

print "<b>Harga FD</b>";
$Hargaagent = ($hargafd-($hargafd*$komagent));
$Hargastokist = ($hargafd-($hargafd*$komstokist));
$Hargaahli = ($hargafd-($hargafd*$komahli));

$komagent = ($hargafd*$komagent);
$komstokist = ($hargafd*$komstokist);
$komahli = ($hargafd*$komahli);

echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px><Strong>Harga Agent</td></tr>";
         "<tr><td width=100px><Strong>Harga Stokist </td></tr>";
         "<tr><td width=100px><Strong>Harga Ahli</td></tr>";
	echo "</table>";

echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px><Strong>$Hargaagent</td></tr>";
         "<tr><td width=100px><Strong>$Hargastokist </td></tr>";
         "<tr><td width=100px><Strong>$Hargaahli</td></tr>";
	echo "</table>";

echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px><Strong>$komagent</td></tr>";
         "<tr><td width=100px><Strong>$komstokist </td></tr>";
         "<tr><td width=100px><Strong>$komahli</td></tr>";
	echo "</table>";	
"<br/>";
"<br/>";
echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px>Harga Agent</td><td width=100px>Harga Stokist </td><td width=100px>Harga Ahli</td></tr>";
	echo "</table>";

echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px>$Hargaagent</td><td width=100px>$Hargastokist </td><td width=100px>$Hargaahli</td></tr>";
	echo "</table>";

echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px>$komagent</td><td width=100px>$komstokist </td><td width=100px>$komahli</td></tr>";
	echo "</table>";

?>