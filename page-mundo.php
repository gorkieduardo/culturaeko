<?php get_header(); ?>

<div class= "container">
  <div class= "row">


    <!--article-->
   <?php
   $args = array('cat' => 86);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
         $category_posts->the_post();
?>


     <div class= "col-12 col-sm-6 col-md-4 mb-3 mt-5">
    <div class="card">
      <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' )); } ?> </a>
       <a href= "<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
        <p class="card-text"><?php the_excerpt(); ?></p>

          </div>
    <div class= "card-footer">
       <small class= "text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?>/ <?php the_author(); ?></small>
</div>
</div>

<?php  endwhile; endif; ?>
  <!--fin art-->


  <!-- fin Jumbotron -->
</div>
</div>







<?php get_footer();?>
