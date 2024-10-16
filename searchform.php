<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search...">
    <button type="submit" id="searchsubmit">Search</button>
</form>
