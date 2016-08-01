<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="home-post-thumbnail">
            <?php the_post_thumbnail();?>
        </div>
        <div id="share"></div>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php get_template_part('templates/source')?>
            [starbox]
        </div>
        <div class="share">
            <share-button></share-button>
        </div>
        <div class="tags">
            <?php echo the_tags(); ?>
        </div>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
    <script>
        var shareButton = new ShareButton();
        $("#share").jsSocials({
            shares: ["email", "twitter", "facebook", "googleplus", "pinterest", "whatsapp"]
        });
    </script>
    <?php endwhile; ?>