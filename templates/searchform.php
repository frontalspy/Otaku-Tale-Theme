<form role="search" method="get" class="search" action="<?= esc_url(home_url('/')); ?>">
  <div class="row">
    <div class="small-12">
      <div class="collapse">
        <div class="search-box">
          <input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>">
        </div>
        <div class="search-button">
          <button type="submit" class="button expand postfix"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>