<?php
get_header(); ?>

<div class="main-content">

    <?php
    // import banner
    include_once('sections/banner.php');

    // import services
    include_once('sections/services.php');

    // import welcome
    include_once('sections/welcome.php');

    // import business-planning
    include_once('sections/business-planning.php');

    // import process
    include_once('sections/process.php');

    // import department
    include_once('sections/department.php');

    // import members
    include_once('sections/members.php');

    // import blogs
    include_once('sections/blogs.php');

    // import subscribes
    include_once('sections/subscribes.php');
    ?>

</div>

<?php
get_footer();
