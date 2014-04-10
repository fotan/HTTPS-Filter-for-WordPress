<?php

/*
Plugin Name: Filter HTTPS embeds
Plugin URI: 
Description: Change all HTTP embeds to use HTTPS so they stop breaking the Lane Blogs Network
Version: 1.1
Author: Matt Danskine, LaneCC 
*/
 


function my_embed_oembed_html( $html ) {
    return preg_replace( '@src="https?:@', 'src="', $html );
}
add_filter( 'embed_oembed_html', 'my_embed_oembed_html' );



// Added for v1.1
// Found here (last post): http://wordpress.stackexchange.com/questions/40747/how-do-i-embed-youtube-videos-with-https-instead-of-http-in-the-url
//Embed Video Fix
function add_secure_video_options($html) {
   if (strpos($html, "<iframe" ) !== false) {
        $search = array('src="http://www.youtu','src="http://youtu');
        $replace = array('src="https://www.youtu','src="https://youtu');
        $html = str_replace($search, $replace, $html);

        return $html;
   } else {
        return $html;
   }
}
add_filter('the_content', 'add_secure_video_options', 10);

?>
