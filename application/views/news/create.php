<?php echo validation_errors (); ?>

<?php echo form_open('news/create'); ?>

	<label for="">Judul</label>
	<input type="text" name="title"> </br>

	<label for="">Text</label>
	<textarea name="text" id="" cols="20" rows="2"></textarea> </br>

	<input type="submit" name="submit" value="Kirim"> </br>

<?php echo form_close(); ?>