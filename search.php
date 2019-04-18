
<?php get_header(); ?>

<!--contenido articulo-->
<div class="container">
  <div class="row">
    <!--articule-->
    <div class="col-sm-6 col-md-8 col-lg-0 my-2">

    </div>
    <div class="col-sm-6 col-md-8 col-lg-8 my-5">
<h4>Resultados de la búsqueda:</h4>
<hr>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('post-tumbnails', array('class' =>'img-fluid'));} ?>
         <h2 class= "my-3"><?php the_title(); ?></h2>
         <?php the_excerpt(); ?>
         <a href="<?php the_permalink();?>">Leer más...</a>

          <?php endwhile; endif;?>
          <hr>
          <h4>Buscar de nuevo</h4>
  <div class="display-5"><?php echo get_search_form(); ?></div>

    </div>
        <!--fin buscar->
        <!--sidebar-->

        <div class="col-sm-6 col-md-8 col-lg-4 my-5">
          <h4 class= "text-uppercase text-muted display-6">Entradas recientes</h4>
          <div class="row d-flex align-items-center my-2 py-2">
            <?php
              $args = array('cat' => 82,
              'posts_per_page' => 8);
                $category_posts = new WP_Query($args);

                     if($category_posts->have_posts()) :
                        while($category_posts->have_posts()) :
                           $category_posts->the_post(); ?>

                  <div class="col-md-7">

                    <a href= "<?php the_permalink(); ?>"><h6 class="display-5"><?php the_title(); ?></h6></a>
                    <p><?php the_author(); ?></p>

                  </div>

                  <div class="col-md-5 mt-4">
                    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid mx-auto' )); } ?> </a>
                  </div>


          <?php  endwhile; endif; ?>
          </div>

        </div>
        <!--fin aside-->
      </div>
      </div>
       <!--fin art-->


      <?php get_footer(); ?>
