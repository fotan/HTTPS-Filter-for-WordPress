<?php

/*
Plugin Name: Filter HTTPS embeds
Plugin URI: 
Description: Change all HTTP embeds to use HTTPS so they stop breaking the Lane Blogs Network
Version: 1.0
Author: Matt Danskine, LaneCC 
*/
 


function my_embed_oembed_html( $html ) {
    return preg_replace( '@src="https?:@', 'src="', $html );
}
add_filter( 'embed_oembed_html', 'my_embed_oembed_html' );

?>
