<?php get_header(); ?>

<!--contenido articulo-->
<div class="container">

  <div class="row">
	 
    <!--articule-->
    <div class="col-sm-6 col-md-8 col-lg-0 my-1">
	

    </div>
    <div class="col-sm-6 col-md-8 col-lg-8 my-5">
<div class="alert alert-dark" role="alert">
		<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
		</div>

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('post-tumbnails', array('class' =>'img-fluid'));} ?>
         <h2 class= "my-3"><?php the_title(); ?></h2>

         <p> <strong> <?php the_author(); ?></strong></p>
         <div class= "text-justify">
         <?php the_content(); ?> </div>
		
         <p class= "lead"><em>Publicado el <?php echo get_the_date(); ?></em></p>
		<
          <?php endwhile; endif;?>
   <div>
          <?php if(get_next_post_link() || get_previous_post_link() ); ?>
        <p><em><strong> Anterior: </strong></em><?php next_post_link();?></p>
        <p> <em><strong> Siguiente: </strong></em><?php previous_post_link(); ?></p>
      </div>
      <div class="alert alert-light" role="alert">
          <?php comments_template(); ?>
      </div>
    </div>
        <!--fin de art-->
        <!--sidebar-->

        <div class="col-sm-6 col-md-8 col-lg-4 my-5">
          <h4 class= "text-uppercase text-muted display-6">Entradas recientes</h4>
		<div>
				
			
          </div>
				
			
          <div class="row d-flex align-items-center my-2 py-2">
            <?php
              $args = array('cat' => 5-29,
              
              'posts_per_page' => 12);
                $category_posts = new WP_Query($args);

                     if($category_posts->have_posts()) :
                        while($category_posts->have_posts()) :
                           $category_posts->the_post(); ?>

                  <div class="col-md-7">
					

    <a href= "<?php the_permalink(); ?>"><h6 class="display-5 <strong>Title:</strong>"><?php the_title(); ?></h6></a>
                    <p><?php the_author(); ?></p>

                  </div>

                  <div class="col-md-5 mt-4">
                    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid mx-auto' )); } ?> </a>
                  </div>


          <?php  endwhile; endif; ?>
          </div>
			
			
			<div class="fb-page" data-href="https://www.facebook.com/CentroEntrenamientoEducacionDigital/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CentroEntrenamientoEducacionDigital/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CentroEntrenamientoEducacionDigital/">CEED</a></blockquote></div>
			
        </div>
	</div>
        <!--fin aside-->
	
    
     
       <!--fin art-->


      <?php get_footer(); ?>
