<?php

function dc_social_sharing_buttons($content) 
{
	if( is_single() )
	{	
		$plantilla		='
		 <a class="dc-link dc-twitter" href="{twitter}" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>'.
		'<a class="dc-link dc-facebook" href="{facebook}" target="_blank"><i class="fa fa-facebook"></i> Facebook </a>'.
		'<a class="dc-link dc-googleplus" href="{google}" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>'.
		'<a class="dc-link dc-linkedin" href="{linkedin}" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>'.
		'<a class="dc-link dc-whatsapp" href="{whatsapp}" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>';

		$cad			='';
		$urlArticulo 	= urlencode(get_permalink());
 		$titleArticulo 	= str_replace( ' ', '%20', get_the_title());

		// Urls
		$twitterURL	= 'https://twitter.com/intent/tweet?text='.$titleArticulo.'&amp;url='.$urlArticulo.'&amp;via=CULTURAEKO';
		$facebookURL= 'https://www.facebook.com/sharer/sharer.php?u='.$urlArticulo;
		$googleURL 	= 'https://plus.google.com/share?url='.$urlArticulo;
		$whatsappURL= 'whatsapp://send?text='.$titleArticulo . ' ' . $urlArticulo;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$urlArticulo.'&amp;title='.$titleArticulo;
 
		$ar_buscar 		= array('{twitter}','{facebook}','{google}','{linkedin}','{whatsapp}');
		$ar_reemplazar 	= array($twitterURL,$facebookURL,$googleURL,$linkedInURL,$whatsappURL);

		$cad	.= '<div class="dc-social">';
		$cad	.= '';
		$cad	.=  str_replace($ar_buscar, $ar_reemplazar, $plantilla);
		$cad	.= '</div>';

		//$content = $cad.$content; //botones superiores
		$content .= $cad; //botones inferiores

		return $content;
	}
	else
	{
		return $content;
	}
};

add_filter( 'the_content', 'dc_social_sharing_buttons',0);

