<?php foreach ($news as $news_item) : ?>
	
	<h1><?php echo $news_item['title'] ?></h1>
	<p><?php echo $news_item['text'] ?></p>
	<p><?php echo $news_item['slug'] ?></p>

<?php endforeach ?>


<?php ?>