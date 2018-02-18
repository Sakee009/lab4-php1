<form action="#" method="POST">
	<fieldset>
		<legend>Dob</legend>
		<input type="text" name="Dob" value="<?php if(isset($_POST['Dob'])){ echo $_POST['Dob']; }?>" ><br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>