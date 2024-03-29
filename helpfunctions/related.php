<?php

 function dc_related_after_content( $content )
 {

    if ( !is_singular('post') ) return $content;

	$cad			= "";
	$template_li 	= '<li class="list-group-item">
							<a class="post-tumbnails" href="{url}">{thumb}</a>
							<a class="" href="{url}">{title}</a>
						       </li>';
	$template_rel	= '<div class="">
<ul class="list-group">
    <li class="list-group-item active text-uppercase display-5" >Articulos relacionados</li>
</ul>
							<ul class=""list-group"">
								{list}
							</ul>
					   </div>';

     $terms = get_the_terms( get_the_ID(), 'category');
    $categ = array();

    if ( $terms )
    {
    	foreach ($terms as $term)
    	{
    		$categ[] = $term->term_id;
    	}
    }
    else{
    	return $content;
    }

     $loop	= new WP_QUERY(array(
    				'category__in'		=> $categ,
    				'posts_per_page'	=> 4,
    				'post__not_in'		=>array(get_the_ID()),
    				'orderby'			=>'rand'
    				));

    if ( $loop->have_posts() )
    {

    	while ( $loop->have_posts() )
    	{
    		$loop->the_post();

    		$search	 = Array('{url}','{thumb}','{title}');

      	$replace = Array(get_permalink(),get_the_post_thumbnail("img-fluid"),get_the_title());


    		$cad .= str_replace($search,$replace, $template_li);

    	}

    	if ( $cad )
    	{
		  	$content .= str_replace('{list}', $cad, $template_rel);
    	}

    }
   	wp_reset_query();

    return $content;
}

add_filter( 'the_content', 'dc_related_after_content');
