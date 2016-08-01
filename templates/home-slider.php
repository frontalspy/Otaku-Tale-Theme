<?php if( have_rows('home_slider', 36021) ): ?>
    <?php while( have_rows('home_slider', 36021) ): the_row(); 
    $image = get_sub_field('slider_image');
    $title = get_sub_field('slider_title');
    $text = get_sub_field('slider_text');
    $url = get_sub_field('slider_url');
    ?>

        <li class="slide">
            <a href="<?php echo $link; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title'] ?>" />
            </a>
            <div class="slider-overlay">
                <p><strong><?php echo $title; ?></strong>
                    <br>
                    <?php echo $text; ?>
                </p>
            </div>
        </li>
     <?php endwhile; ?>
<?php endif; ?>