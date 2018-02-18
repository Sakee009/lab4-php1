<?php
	
	if(isset($_POST['DOB'])){
		echo $_POST['DOB'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Dob</legend>
		<input type="text" name="Dob" value="" ><br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>