<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search …" value="<?php echo get_search_query(); ?>" name="s">
            </label>
        </div>

        <div class="col-6">
            <input type="submit" class="button alt search-submit" value="<?php echo _x('Search', 'submit button', 'readonly'); ?>">
        </div>
    </div>
</form>
