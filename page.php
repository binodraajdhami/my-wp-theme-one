<?php
get_header();
?>

<?php include_once('sections/breadcrumb.php'); ?>

<div class="content">
    <div class="container">
        <div class="content-block">
            <div class="header-content">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="main-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
