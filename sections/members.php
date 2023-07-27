<section class="members">
    <div class="container">
        <div class="section-title">
            <h4>OUR MEMBER</h4>
            <h2>Expert Professionals</h2>
        </div>
        <div class="section-content">
            <div id="members-slider" class="owl-carousel owl-theme">
                <?php
                $args = [
                    'post_type' => 'members',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ];

                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post();
                ?>
                    <div class="item">
                        <div class="members-content">
                            <div class="members-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="members-description">
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <span>
                                    <?php echo get_post_meta($post->ID, 'members_title', true); ?>
                                </span>
                            </div>
                            <div class="members-social-link">
                                <span class="icon-share">
                                    <i class="fa-solid fa-share-alt"></i>
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo get_post_meta($post->ID, 'members_facebook', true); ?>">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_post_meta($post->ID, 'members_instagram', true); ?>">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_post_meta($post->ID, 'members_twitter', true); ?>">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_post_meta($post->ID, 'members_linkedin', true); ?>">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>