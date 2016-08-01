<li data-equalizer-watch>
    <article <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
            <div class="home-post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <header>
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </header>
        </a>
        <div class="entry-summary">
            <?php get_template_part('templates/entry-meta'); ?>
                <?php the_excerpt(); ?>
        </div>
        <div class="home-posts-category text-center">Categories:
            <?php echo the_category(', '); ?>
        </div>
    </article>
</li>