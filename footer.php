<footer>
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-content footer-about">
                        <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="<?php bloginfo('name') ?>">
                            <?php dynamic_sidebar('sidebar-2'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-content footer-location">
                        <h3>Head Office</h3>
                        <div class="footer-location-content">
                            <span><i class="fa-solid fa-map-marker-alt"></i></span>
                            <span>2972 Westheimer Rd. Santa Ana, Illinois 85486</span>
                        </div>
                        <h4>Branch Office</h4>
                        <div class="footer-location-content">
                            <span><i class="fa-solid fa-map-marker-alt"></i></span>
                            <span>8502 Preston Rd. Inglewood, Maine 98380</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-content footer-post">
                        <h3>Recent Post</h3>
                        <?php
                        $args = [
                            'posts_per_page' => 2,
                            'order' => 'DESC',
                        ];

                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) {
                            $loop->the_post();
                        ?>
                            <div class="footer-post-item">
                                <div class="footer-post-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="footer-post-content">
                                    <span>
                                        <i class="fa-solid fa-calendar"></i>
                                    </span>
                                    <span><?php echo get_the_date('M d, Y'); ?></span>
                                    <h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-copyright">
        <div class="container">
            <p>Copyright <?php echo Date('Y'); ?> - My WordPress Theme One. All Rights Reserved.</p>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>