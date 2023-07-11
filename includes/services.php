<section class="services">
    <div class="container">
        <div class="section-title">
            <h4>OUR SOLUTIONS</h4>
            <h2>Popular Services</h2>
        </div>
        <div class="section-content">
            <div id="services-slider" class="owl-carousel owl-theme">
                <?php
                $args = [
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ];

                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post();
                ?>
                    <div class="item">
                        <div class="services-item">
                            <div class="services-item-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="services-item-content">
                                <img src="<?php echo get_post_meta($post->ID, 'service_item_icon', true); ?>" alt="<?php the_title(); ?>">
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <?php the_content(); ?>
                                <span>
                                    <a href="<?php the_permalink(); ?>">
                                        Read More <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</section>