<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<article class="vid-space">
<h4 class="fill"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a>


<small class="text-uppercase"><?php get_template_part('templates/entry'); ?></small>

</article>

</div>

