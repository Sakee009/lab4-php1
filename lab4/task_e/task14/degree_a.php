<?php
	
	if(isset($_POST['degree'])){
		echo $_POST['degree'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>degree</legend>
		<input type="Checkbox" name=""/><label for="">SSC</label>
			 <input type="Checkbox" name="" /><label for="">HSC</label>
				  <input type="Checkbox" name=""/><label for="">BSC</label>
		     <input type="Checkbox" name=""/><label for="">MSC</label>
							 
			<hr/>
			<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>