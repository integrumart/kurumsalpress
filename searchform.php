<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; gap: 0.5rem; max-width: 600px; margin: 0 auto;">
    <label style="flex: 1;">
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'kurumsalpress' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Ara...', 'placeholder', 'kurumsalpress' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="width: 100%; padding: 1rem; border: 2px solid #e2e8f0; border-radius: 50px; font-size: 1rem;" />
    </label>
    <button type="submit" class="search-submit btn btn-primary">
        <?php echo esc_html_x( 'Ara', 'submit button', 'kurumsalpress' ); ?>
    </button>
</form>
