<ul class="list-unstyled list-inline">
	<li>
		<time class="updated" datetime="<?= get_post_time('c', true); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?= get_the_date(); ?></time>
	</li>

	<li>
		<p class="byline author vcard"><?= __('<i class="fa fa-user" aria-hidden="true"></i>', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
	</li>
</ul>


