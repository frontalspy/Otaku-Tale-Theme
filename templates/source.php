<br>
<br>

<h15>
    <?php if( have_rows('source') ): ?>
        <?php while( have_rows('source') ): the_row(); 
        $type = get_sub_field('source_type');
        $title = get_sub_field('source_title');
        $url = get_sub_field('source_url');
        ?>
            <a href="<?php echo $url; ?>">
                <?php echo $type; ?> -
                    <?php echo $title; ?>
            </a>
            <br>
            <?php endwhile; ?>
    <?php endif; ?>

<?php echo the_field('copyright');?>
</h15>