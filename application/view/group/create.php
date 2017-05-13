<form method="POST" action="<?php echo URL; ?>group/create">
	<label>Name</label>
	<input type="text" name="group_name" value="" required />
	<label>Description</label>
	<input type="text" name="group_des" value="" required />
	<input type="submit" name="create_group" value="Create"/>
</form>