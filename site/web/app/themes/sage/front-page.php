<h2><i class="fa fa-list-ul" aria-hidden="true"></i> News</h2>
<hr>
<div class="panel">
        <div class="">
<div class="row">
<?php query_posts('category_name=video&post_type=post&posts_per_page=3&paged='.get_query_var('paged')); ?>

<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
	<div class="col-md-3">
	<?php the_post_thumbnail('full', array('class' => 'img-responsive thumbnail home-margin')); ?></div>
<div class="col-md-9">
      <div id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title('<h4 class="home-margin">',"</h4>"); ?></a>
      </div>
<small class="text-uppercase">
        <i class="fa fa-tags" aria-hidden="true"></i> <?php the_category(', ') ?> <i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?> <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('F jS, Y') ?> | <?php edit_post_link('Edit', '', ' | '); ?><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small> <hr>

          <div class="entry">
<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
</div><hr></div>
<div class="clearfix"></div>
          <?php endwhile; ?>
     
     <?php else : ?> <div class="col-md-12"><h2>Not Found</h2>
<p><?php _e("Sorry, no posts or pages could be found. Why not search for what you were trying to find?"); ?></p> <?php get_search_form(); ?>
</div>
<?php endif; ?>
</div>

</div>

</div>
<a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>
<div class="clearfix"></div>
<br>