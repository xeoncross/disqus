Because the Disqus comment HTML/JS is used several places around my site I found it useful to wrap the output in a class that lets me easily add the Disqus form (plus options) to any page.

In the http://micromvc.com style folder stucture

Released Free under the MIT License

http://xeoncross.com


-- disqus_developer
 
Description: Enables developer mode, which allows testing to be done 
on local, protected, or otherwise inaccessible servers.

Usage: Integer 1 to turn on. Integer 0 to turn off.
Default: Integer 0



-- disqus_url
 
Description: Defines the page URL associated with a comment thread. 
Disqus uses this URL to uniquely create and identity a comment thread.

Usage: Accepts a URL string.
Default: Retrieves from window.location.


-- disqus_identifier

Description Defines a custom identifier for Disqus to use in place 
of the page URL (disqus_thread).

Usage: Accepts a string or integer.
Default: None.


-- disqus_title

Description: Defines the comment thread's title.

Usage: Accepts a string.
Default: Uses the disqus_title is no title is set.


-- disqus_message

Description: Defines the page's content (article or blog post) to use 
as context.

Usage: Accepts a string.
Default: None.


-- disqus_iframe_css

Description: Disqus uses an iframe to do all posting, including 
commenting and authentication. This parameter allows the site to 
define an external stylesheet to use within the iframe.

Usage: Accepts URL string (full path to stylesheet).
Default: None.


-- disqus_container_id

Description: Disqus is contained within the container on the page. 
If the container is changed, the ID must be passed to Disqus.

Usage: Accepts a string.
Default: 'disqus_thread'


-- disqus_def_email

Description: Defines a default email address used in the 
comment/authentication forms in the iframes.

Usage: Accepts a string.
Default: None.


-- disqus_def_name

Description: Defines a default name used in the comment/authentication 
form sin the iframes.

Usage: Accepts a string.
Default: None.


-- disqus_category_id

Description: Sets the category in which the thread will belong when 
created. Read more about categories here.

Usage: Accepts an integer.
Default: null.


-- disqus_skip_auth

Description: When set to true, Disqus will not prompt guest commenters 
to login or register an account with a popup box after posting.

Usage: true or false
Default: false
