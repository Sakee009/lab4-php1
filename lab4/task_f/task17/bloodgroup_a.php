<?php
	
	if(isset($_POST['degree'])){
		echo $_POST['degree'];
	}
	
?>
<form action="#" method="POST">
	<fieldset>
		<legend>degree</legend>
		<select><option value="O+">O+</option>
			<option value="O-">O-</option>
				<option value="B+">B+</option>
			<option value="B-">B-</option>
		</select>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>