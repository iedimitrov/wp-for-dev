<?php 
/* 
* Template Name: Whoots 
*/ 
?>

<?php get_header(); ?>
<div class="container pt-5 pb-5">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" > 
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://uni.cloudskyhigh.net/wp-content/uploads/2019/12/Wapuu-BG-540x681.png" class="d-block w-10" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://uni.cloudskyhigh.net/wp-content/uploads/2019/12/Wapuu-Sofia-540x739.png" class="d-block w-10" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://uni.cloudskyhigh.net/wp-content/uploads/2019/12/Wapuu-Varna-567x657.png" class="d-block w-10" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php endwhile;
endif; ?>

</div>
<?php get_footer(); ?> 
