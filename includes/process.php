<section class="process">
    <div class="container">
        <div class="section-title">
            <h4>WORK PROCESS</h4>
            <h2>Our Solution Process</h2>
        </div>
        <div class="section-content">
            <div id="process-slider" class="owl-carousel owl-theme">
                <?php
                $count = 0;
                $args = [
                    'post_type' => 'process',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ];

                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post();
                    $count++;
                ?>
                    <div class="item">
                        <div class="process-content">
                            <div class="process-count">
                                <span>0 <?php echo $count; ?></span>
                            </div>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>