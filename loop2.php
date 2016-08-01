
<strong>States:</strong>   
<ul>
  <?php
  # keluarkan tajuk Bold  <strong>States:</strong>   
  # <ul> untuk bullets
  $states = array("Selangor","Johor","Negeri Sembilan", "Melaka","Perak","Perlis"); 
     foreach($states as $state) {
       echo "<li>".$state .PHP_EOL."</li>";
       #php_eol untuk space. boleh jugak pakai " "
     }
  ?>
</ul>