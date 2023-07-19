<section class="blogs">
    <div class="container">
        <div class="section-title">
            <h4>FROM THE BLOG</h4>
            <h2>News & Articles</h2>
        </div>
        <div class="section-content">
            <div class="row">
                <?php
                $args = [
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                ];

                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post();
                ?>
                    <div class="col-sm-4 col-12">
                        <div class="blogs-content">
                            <div class="blogs-thumbnail">
                                <?php the_post_thumbnail(); ?>
                                <div class="blogs-post-date">
                                    <span><?php echo get_the_date('d'); ?></span>
                                    <span><?php echo get_the_date('M'); ?></span>
                                </div>
                            </div>
                            <div class="blogs-description">
                                <div class="blogs-author-comments">
                                    <span>
                                        <i class="fa-solid fa-user"></i> By-Admin</span>
                                    <span>
                                        <i class="fa-solid fa-comment"></i> <?php comments_number(); ?></span>
                                    </span>
                                </div>
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
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