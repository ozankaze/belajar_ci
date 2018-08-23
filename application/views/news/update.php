<?php echo validation_errors (); ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>

	<label for="">Judul</label>
	<input type="text" name="title" value="<?php echo $news_item['title'] ?>"> </br>

	<label for="">Text</label>
	<textarea name="text" id="" cols="20" rows="2"><?php echo $news_item['text'] ?></textarea> </br>

	<input type="submit" name="submit" value="Kirim"> </br>

<?php echo form_close(); ?>