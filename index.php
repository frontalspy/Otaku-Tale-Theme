<?php if(is_front_page()) :?>
   <div class="home-slider">
    <?php get_template_part('templates/home-slider'); ?>
</div>
<?php endif; ?>
<ul class="home-posts small-block-grid-1 medium-block-grid-2 large-block-grid-3" data-equalizer>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</ul>
<div class="page-navigation">
    <?php pagination(); ?>
</div>