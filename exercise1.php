<strong>States: </strong>

   <?php

   #assign nama negeri, ibu negeri dan singkatan
   $states = array("Selangor", "Johor", "Kedah", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
   
   $ibunegeri = array("Shah Alam", "Johor Bahru", "Alor Setar", "Kota Baru", "Bandar Melaka", "Seremban", "Kuantan", "Ipoh", "Kangar", "Georgetown", "Kota Kinabalu", "Kuching", "Kuala Terengganu");
   $short = array("SGR", "JHR", "KDH", "KTN", "MEL", "NS", "PHG", "PRK", "PLS", "PPG", "SBH", "SWK", "TRG");

   # tajuk table
   echo "<table border='1'' cellspacing='0' cellpading='0'>";
   echo "<tr><td width=100px><Strong>Nama Negeri</td><td width=100px><Strong>Ibu Negeri </td><td width=100px><Strong>Singkatan</td></tr>";
	echo "</table>";

   #start keluarkan output guna 'do' dalam table
   #panggil nama singkatan yg di assign di atas.
$num = 0;
   do{
   		echo "<table border='1'' cellspacing='0' cellpading='0'>";
        echo "<tr><td width=100px>".$states[$num]. "</td><td width=100px>".$ibunegeri[$num]."</td><td width=100px>".$short[$num]. "</td></tr>";
       $num++;
   }while($num <= 12);
   		echo "</table>";

   ?>

