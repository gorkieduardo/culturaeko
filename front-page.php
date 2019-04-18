<!--contenido-->

<?php  get_header(); ?>

<div class= "container">
  
   <div class="row">
     <div class="col-xs-6 col-md-6 col-lg-8 mt-4" >
		 <h4 class="text-uppercase display-5">Actualidad</h4>
          <div class="alert alert-secondary" role="alert">

        <?php
         $args = array(
         'cat'=> array(132),
         'posts_per_page' => 1
		 
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h2>', '</h2>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>
        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
      </div>
  

</div><!-- fin de primera container-primer bloque-->


 <div class="col-xs-6 col-md-6 col-lg-4 mt-3 ">
			<h4 class="text-uppercase display-5">Economía</h4>
      <div class="alert alert-secondary" role="alert">

        <?php
         $args = array(
         'cat'=> array(133),
         'posts_per_page' => 1
		
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h4>', '</h4>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>
        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
      </div>
		</div>

	</div>


</div>

<!--mas temas de interés-->

<hr>

<!--contenido-->
<div class= "container">
	<h4 class="text-uppercase display-5 mb-4 my-1 py-1">Destacadas</h4>
  <div class= "row">

    <!--article-->
   <?php
   $args = array('cat' => 2,
   'posts_per_page' => 6);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
         $category_posts->the_post();
?>


     <div class= "col-12 col-sm-6 col-md-4 mb-3">
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

</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-6 col-lg-7">
			<h3 class="text-uppercase display-5" >Mundo</h3>

			<!--aplicar el control -->
      <div class="alert alert-secondary" role="alert">

        <?php
         $args = array(
         'cat'=> array(110),
         'posts_per_page' => 1
		
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h1>', '</h1>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>


        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
      </div>


		</div>

		<div class="col-xs-6 col-md-6 col-lg-5 ">
			<h3 class="text-uppercase display-5">Análisis</h3>
      <div class="alert alert-secondary" role="alert">

        <?php
         $args = array(
         'cat'=> array(106),
         'posts_per_page' => 1
		
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h1>', '</h1>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>


        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
      </div>
		</div>

	</div>


</div>
<!--comienzo del ultimo container-->

<hr>

<!--contenido-->
<div class= "container">
	<h4 class="text-uppercase display-5 mb-2 my-1 py-1">Paratextos</h4>
	
    <div class="row d-flex align-items-center my-2 py-2">
		
      <?php
        $args = array('cat' => 57,
        'posts_per_page' => 6);
          $category_posts = new WP_Query($args);

               if($category_posts->have_posts()) :
                  while($category_posts->have_posts()) :
                     $category_posts->the_post(); ?>

            <div class="col-md-7 push-md-5">
           
              <a href= "<?php the_permalink(); ?>"><h3 class="display-5"><?php the_title(); ?></h3></a>
              <p><?php the_author(); ?></p>
              <p class="lead"><?php the_excerpt(); ?></p>
            </div>

            <div class="col-md-5 pull-md-7 mt-4">
              <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid mx-auto' )); } ?> </a>
            </div>


<?php  endwhile; endif; ?>
</div>
<hr>
</div>



<!--ultimo container-->

 
<div class= "container">
  <div class="row">
    <div class="col-xs-6 col-md-6 col-lg-6">

    <h4 class= "text-uppercase display-5 mb-2 my-1 py-1">Talleres del CEED</h4>
	
 		 <?php
         $args = array(
         'cat'=> array(425),
         'posts_per_page' => 1
		 
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h2>', '</h2>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>
        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
		
    
      </div>


    <div class="col-xs-6 col-md-6 col-lg-6">
      <h4 class="card-title text-uppercase display-5">El rincón de la poesía</h4>

       <div class="alert alert-secondary" role="alert">

        <?php
         $args = array(
         'cat'=> array(393),
         'posts_per_page' => 1
           );
         $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

         <div class="display-1"> <?php the_title('<h4>', '</h4>'); ?></div>

         <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>

         <div class="display-5"> <?php the_excerpt(); ?></div>
        <hr>
        <p class="mb-0"> <a href="<?php the_permalink() ?>" class="btn btn-info">Leer más</a>

         <?php   endwhile; wp_reset_postdata();?>.</p>
      </div>
    </div><!--fin de la columna final-->

  </div>



</div> <!--div de ultimo container-->

</div>


<?php get_footer();
