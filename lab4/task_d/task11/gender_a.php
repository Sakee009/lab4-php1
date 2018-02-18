<?php
	
	if(isset($_POST['gender'])){
		echo $_POST['gender'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		<input type="radio" id="Male" name="gender"/>
                 <label for="Male">Male</label>		
			       <input type="radio" id="Female" name="gender" />
                     <label for="Female ">Female</label>
                 <input type="radio" id="Other" name="gender"/>
             <label for="Other">Other</label></br></br>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>