<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		    <input type="radio" id="Male" name="gender" value="<?php if(isset($_POST['Male'])){ echo $selected; }?>"/>
                 <label for="Male">Male</label> 		
			       <input type="radio" id="Female" name="gender"  value="<?php if(isset($_POST['Female'])){ echo $selected; }?>" />
                     <label for="Female ">Female</label>
                 <input type="radio" id="Other" name="gender" value="<?php if(isset($_POST['Other'])){ echo $selected; }?>"/>
             <label for="Other">Other</label>
			 </br></br>
		  <hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>