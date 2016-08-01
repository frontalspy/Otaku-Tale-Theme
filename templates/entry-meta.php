<?php if(is_single()) : ?>
<div class="post-meta">
<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?= get_the_author(); ?></a></p> |
<span><?php echo the_category(' , '); ?></span> | <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time> |
<a href="#disqus_thread"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a>
</div>
<?php else : ?>
<div class="post-meta">
<time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time> |
<a href="#disqus_thread"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a>
</div>
<?php endif; ?>