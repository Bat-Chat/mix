<form action="<?php echo home_url( '/' ) ?>" method="get">
	<input type="text" value="<?php echo get_search_query() ?>" name="s" size="10" id="s" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
	<input type="submit" name="Search" value="" id="searchbutton" title="Search" />
</form>