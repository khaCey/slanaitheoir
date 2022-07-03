<?php get_header(); ?>


<section id="contact">
    <div class="container px-7">
        <div class="row gx-7 align-items-center">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    the_content();
                }
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>