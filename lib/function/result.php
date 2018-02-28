<?php
	function result($output, $myid){
		include("lib/database/database_connection.php");
		echo '<div class="product_output">
		<img src="'.$output['picture'].'" alt="picture" />
		<div class="data">
			year :'.$output["year"].'<br>
			make :'.$output["make"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			cc :'.$output["cc"].'<br>
			
		</div>';	
		echo '</div>';
	}
?>