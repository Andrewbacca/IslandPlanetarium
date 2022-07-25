<nav class="navbar navbar-main navbar-expand-xl">
    <div class="d-flex flex-grow-1 container align-items-end">
        <span class="d-md-none d-block" style="width:44px;"></span>
        <a class="navbar-brand me-lg-5 mx-0" href="<?= home_url() ?>">
            <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="WightFibre Business Logo" height="60" width="140" alt=" WightFibre Business Logo"/>
        </a>

        <!-- Navbar Nav-->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
            <?php
            wp_nav_menu(array(
                    'menu'           => 'primary',
                    'theme_location' => 'primary',
                    'depth'          => 2,
                    'container'      => false,
                    'menu_class'     => 'navbar-nav text-center navbar-white-text',
                    'fallback_cb'    => 'bs4navwalker::fallback',
                    'walker'         => new bs4navwalker()
                ));
            ?>
        </div>
    </div>
</nav>
<div class="nav-divider p-1 bg-white">&nbsp;</div>
