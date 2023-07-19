<section class="department">
    <ul class="department-list">
        <?php
        $args = [
            'post_type' => 'departments',
            'posts_per_page' => 4,
            'order' => 'ASC',
        ];

        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
            <li class="department-item" style="background: url('<?php echo $featured_img_url; ?>') no-repeat center center; background-size: cover;">
                <div class="department-content">
                    <h4><?php the_title(); ?></h4>
                    <span>Conbix Consulting</span>
                    <span>
                        <?php //echo get_post_meta($post->ID, 'departments_sub_title', true); 
                        ?>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>