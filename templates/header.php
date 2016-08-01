<div class="contain-to-grid">
    <header>
        <div class="header-image">
            <a href="<?php echo home_url(); ?>">
               <img src="<?php echo get_template_directory_uri(); ?>/dist/images/otaku-tale-header.jpg" alt="Otaku Tale Header">
           </a>
        </div>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
            </ul>
            <section class="top-bar-section">
                <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif; ?>
            </section>
        </nav>
    </header>
</div>
<!-- contain-to-grid -->