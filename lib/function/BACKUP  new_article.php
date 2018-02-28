<?php
	function new_article(){
		include("lib/database/database_connection.php");
		
		if(!function_exists('result'))
			include("lib/function/result.php");
	
		$result = mysqli_query($conn,"SELECT * 
		FROM vehicle
		ORDER BY id DESC
		LIMIT 0,35");
		
		if($result ==true){
			echo '<table id="product" ><tr>';
			$y=1;
			while($fav_output = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				result($fav_output, 1, $y++);
			}
			switch(($y-1)%5){
				case 0:
				echo'<td></td><td></td><td></td><td></td>';
				break;
				case 1:
				echo'<td></td><td></td><td></td>';
				break;
				case 2:
				echo'<td></td><td></td>';
				break;
				case 3:
				echo'<td></td>';
				break;
			}
			echo '</tr></table>';
			
			$conn->close();
			return true;
		}
		else return false;
		
	}
?>