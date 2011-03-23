<form method="get" id="search-form" action="<?php bloginfo('url'); ?>/">
<!-- <div id="search-icon"></div> -->
  <input id="s" name="s"   type="text"   value="<?php the_search_query(); ?>" />
  <input id="search-submit" type="image" src="<?php bloginfo('template_directory'); ?>/images/search-icon.png" alt="Search" name="submit" />
</form>
