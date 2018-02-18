<form action="#" method="POST">
	<fieldset>
		<legend>degree</legend>
		<input type="checkbox" name="degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?>"<label for="">SSC</label>
		<input type="checkbox" name="degree"value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?>" <label for="">HSC</label>
		<input type="checkbox" name="degree"value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?>"<label for="">BSC</label>
		<input type="checkbox" name="degree"value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?>"<label for="">MSC</label><br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>