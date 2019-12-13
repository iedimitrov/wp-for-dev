<?php 
/* 
* Template Name: Card 
*/ 
?>

<?php get_header(); ?>
<div class="container pt-5 pb-5">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="card" style="width: 18rem;">
  <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ivan's Git</h5>
    <p class="card-text">You can check my Git repo using this handy link:</p>
    <a href="https://github.com/iedimitrov/wp-for-dev.git" class="btn btn-primary">Go to Git</a>
  </div>
</div>

<?php endwhile;
endif; ?>

</div>
<?php get_footer(); ?>