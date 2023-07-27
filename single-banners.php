<?php
get_header();
?>

<?php include_once('sections/breadcrumb.php'); ?>

<div class="content single-post-content">
    <div class="container">
        <div class="content-block">
            <div class="row">
                <div class="col-12">
                    <div class="header-content">
                        <h1><?php the_title(); ?></h1>
                        <hr>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-12">
                    <div class="main-content">
                        <div class="single-post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="related-post-content">
                        <h5>Related Banners</h5>
                        <ul>
                            <?php
                            $args = [
                                'post_type' => 'banners',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'post__not_in' => array($post->ID)
                            ];

                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) {
                                $loop->the_post();
                            ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
