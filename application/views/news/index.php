<?php foreach ($news as $news_item) : ?>
	<h1><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title'] ?></a></h1>
	<p><?php echo $news_item['text'] ?></p>

<?php endforeach ?>


<?php ?>