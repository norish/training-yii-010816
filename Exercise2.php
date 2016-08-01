<strong>Malaysia States: </strong>

<?php
class States{
	function getState() {
		return array(array("name" => "Selangor", "ibunegeri" => "Shah Alam", "short" => "SGR"),
								   array("name" => "Johor", "ibunegeri" => "Johor Bahru", "short" => "JHR"),
								   array("name" => "Kedah", "ibunegeri" => "Alor Star", "short" => "KDH"));
		
	}
}

$states = new States(); 

foreach($states->getState() as $state) 
	{ 
		echo "<table border='1'' cellspacing='0' cellpading='0'>";
		echo "<tr><td width=100px>" .$state['name']. "</td>";
		echo "<td width=100px>" .$state['ibunegeri']. "</td>";
		echo "<td width=100px>" .$state['short']. "</td></tr>";

			 
				if($state['name'] =='Johor'){
				   $bold = "class='textbold'";
			    }
				echo "<tr ".$bold."><td>" . $state["name"] . "</td><td>" . $state["íbunegeri"]. $state["short"]. 
					echo "</table>"; }
	}
	
	

?>
