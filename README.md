Description:
Plugin that filters HTTP embeds (like YouTube) and forces them to pull from HTTPS.

WordPress 3.6+ includes an oembed filter that, in theory, should take care of it, but all it really does is takes the https:// input and pulls the video from YouTube's http:// server.  Stupid.


To Use:
Upload to wp-content/plugins and enable just like any plugin.

There are no settings or menus added to Dashboard.  It just works.


v1.1
Added a second filter to handle <iframe> embeds of YouTube videos.
Thanks to: http://wordpress.stackexchange.com/users/40817/troutacular
for answering this post: http://wordpress.stackexchange.com/questions/40747/how-do-i-embed-youtube-videos-with-https-instead-of-http-in-the-url
