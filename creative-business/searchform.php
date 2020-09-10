<form id="searchform" class="searchform" name="mn_searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" value="<?php echo get_search_query(); ?>">
    <button onclick="document.mn_searchform.submit();"><span class="dashicons-before dashicons-search" ></span></button>
</form>