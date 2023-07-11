<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-content">
                        <div class="header-hour">
                            <span><i class="fa-solid fa-clock"></i> Working Hours : Monday - Friday 9: - 5 PM</span>
                        </div>
                        <div class="header-social-link">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-button">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="header-logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="header-nav">
                                <nav>
                                    <ul>
                                        <?php
                                        wp_nav_menu(array('theme_location' => 'header-menu'));
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>