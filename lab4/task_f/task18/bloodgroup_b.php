<form action="#" method="POST">
	<fieldset>
		<legend>bloodgroup</legend>
		<select>
		
			<option name="" value="<?php if($_POST['O+']){ echo "selected";}?>">O+</option>
			   <option name="" value="<?php if($_POST['O-']){ echo "selected";}?>">O-</option>
			   <option name="" value="<?php if($_POST['A+']){ echo "selected";}?>">A+</option>
			<option name="" value="<?php if($_POST['A-']){ echo "selected";}?>">A-</option>
		
		</select>
		
		<br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>