<section class="banner">
    <div id="banner-slider" class="owl-carousel owl-theme">
        <?php
        $args = [
            'post_type' => 'banners',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ];

        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();
        ?>

            <div class="item">
                <?php the_post_thumbnail(); ?>
                <div class="banner-container">
                    <div class="container">
                        <div class="banner-content">
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>">Let's Recent Works <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</section>