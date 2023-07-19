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

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>