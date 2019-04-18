<?php get_header(); ?>
 <!--cont4enido art-->

<div class="container">
  <div class= "row">
     <!-- art-->
     <div class="col-12 col-md md-9 my-5">

       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_post_thumbnail('full', array('class'=> 'img-fluid') ); ?>


          <h2><?php the_title(); ?></h2>
          <div class= "text-justify">
            <?php the_content(); ?>


          </div>
        <?php endwhile; endif;?>
  <!--fin art-->
</div>


<!--fin contenido -->
</div>
</div>



<?php get_footer(); ?>
