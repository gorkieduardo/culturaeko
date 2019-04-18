
<?php get_header(); ?>
<section class="container contenido">
    <div class="row">
        <?php
            while(have_posts()): the_post(); ?>

              <div class="col-xs-6 col-md-4 entrada mt-5">

                <div class="card">
                  <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' )); } ?> </a>
                   <a href= "<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
                    <p class="card-text"><?php the_excerpt(); ?></p>

                      </div>
                <div class= "card-footer">
                   <small class= "text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?>/ <?php the_author(); ?></small>
            </div>
              </div>



          <?php   endwhile;

         ?>

    </div>

</section>

<?php get_footer();
