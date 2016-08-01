<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <p style="text-align: center;">Sorry, we couldn't find what you're looking for. So stop being an idiot and search for something else, maybe your spelling is off since the titles of anime can be very confusing. Baka <br> <img src='//www.otakutale.com/wp-content/uploads/2014/02/Otaku-Tale-search-error.jpg'></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

 <ul class="home-posts small-block-grid-1 medium-block-grid-2 large-block-grid-3" data-equalizer>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>
</ul>

<?php pagination(); ?>