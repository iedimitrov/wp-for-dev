<?php get_header(); ?>
<div class="container pt-5 pb-5">
   <div class="row">		
      <div class="col-xs-12 col-sm-8">		
          <?php if (have_posts()): while (have_posts				()) : the_post(); ?>
          <div class="card mb-5">
     <div class="card-body">
	<h3><?php the_title(); ?></h3>
	<?php the_excerpt(); ?>
	   <a href="<?php the_permalink(); ?>" class="btn 
		btn-success">Read more</a>
      </div>
    </div>    			
<?php endwhile; endif; ?>
</div>

<div class="col-xs-12 col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	   <div id="secondary" class="widget-area" 
		role="complementary">
	      <?php dynamic_sidebar( 'sidebar-1' ); ?>
	   </div>
	<?php endif; ?>
   </div>	
  </div> <!-- row -->
</div> <!-- .container -->
<?php get_footer(); ?>