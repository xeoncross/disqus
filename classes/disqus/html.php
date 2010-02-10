<?php
class Disqus_HTML {
	
	/**
	 * Returns the Disqus comment form HTML and JS with the optional
	 * config values set. API 1.1 values can include:
	 * 
	 * disqus_developer
	 * disqus_url
	 * disqus_identifier
	 * disqus_title
	 * disqus_message
	 * disqus_iframe_css
	 * disqus_container_id
	 * disqus_def_email
	 * disqus_def_name
	 * disqus_category_id
	 * disqus_skip_auth
	 * 
	 * @param string $thread_id the optional thread ID of the comment form
	 * @param array $config optional config values
	 * @return string
	 */
	public static function comment_form($site, $identifier = NULL, array $config = NULL)
	{
		$output = '';
		
		// Allow shorthand
		if($identifier)
		{
			$config['disqus_identifier'] = $identifier;
		}
		
		// Set any disqus configuration options
		if($config)
		{
			$output .= '<script type="text/javascript">';
			foreach($config as $key => $value)
			{
				$output .= "\n\t var $key = ". (is_string($value) ? "'$value'" : $value). ';';
			}
			$output .= "\n</script>\n";
		}
		
		// Use the default container ID
		if( ! isset($config['disqus_container_id']))
		{
			$output .= '<div id="disqus_thread"></div>';
		}
		else
		{
			$output .= '<div id="'. $config['disqus_container_id']. '"></div>';
		}
		
		// Load the Javascript
		$output .= '<script type="text/javascript" src="http://disqus.com/forums/'
				. $site. '/embed.js"></script><noscript><a href="http://disqus.com/forums/'
				. $site. '/?url=ref">View the discussion thread.</a></noscript>';
				
		//<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
		
		return $output;
	}
	
	
	/**
	 * Returns the HTML/JS requried to show the comment count in links.
	 * 
	 * @param string $site the site name
	 * @param string $disqus_container_id the optional disqus container ID
	 * @return string
	 */
	public static function comment_count($site, $disqus_container_id = 'disqus_thread')
	{
		$html = <<<END
<script type="text/javascript">
	//<![CDATA[
	(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
		if(links[i].href.indexOf('#[div]') >= 0) {
			query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
		}
		}
		document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/[site]/get_num_replies.js' + query + '"></' + 'script>');
	})();
	//]]>
</script>
END;
		return str_replace(array('[div]', '[site]'), array($disqus_container_id, $site), $html);

	}
}