
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="blog-post-title"> 
<a href="<?php the_permalink(); ?>"> 
<?php the_title(); ?></a></h2> 
 
 <p class="blog-post-meta"><?php the_date(); ?> par <a 
href="#"><?php the_author(); ?></a></p> 
<a href="<?php comments_link(); ?>"> <?php printf( _nx( 'One Comment',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a></p>
  <?php the_excerpt(); ?> </div><!-- /.blog-post --> 
<?php if ( has_post_thumbnail() ) {?>
<div class="row">
<div class="col-md-4"> <?php the_post_thumbnail('thumbnail'); ?>
</div>
<div class="col-md-6"> <?php the_excerpt(); ?> </div>
</div>
<?php } else { ?>
<?php the_excerpt(); ?> <?php } ?>

 <?php the_content(); ?> 
	 <?php  endwhile; ?>
<?php  endif; ?>
