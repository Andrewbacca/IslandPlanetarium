<?php
/* Template Name: Full-Width + No Header */

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="main-content">
            <section id="content">
                <?php
                the_content(); ?>
            </section>
        </div>
        <?php
    }
}

get_footer();
?>