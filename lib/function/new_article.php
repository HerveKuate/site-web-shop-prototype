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
			echo'<div id="article"> ';
			while($fav_output = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				result($fav_output, 1);
			}
			
			$conn->close();
			echo'</div>';
			return true;
		}
		else return false;
		
	}
?>