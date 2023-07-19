<?php
defined('MYTHEMEONE_VERSION') or define('MYTHEMEONE_VERSION', '1.0.1');

// ==================================================================================
// =============================== add theme supports ===============================
// ==================================================================================
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

// ==================================================================================
// ================================== register menu =================================
// ==================================================================================
function register_my_wp_theme_one_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_wp_theme_one_menus');

// ==================================================================================
// ============================== add styles & scprits ==============================
// ==================================================================================
function my_wp_themes_one_enqueue_style()
{
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('googlefonts-style', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('owl-theme-default-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('wptheme-style', get_template_directory_uri() . '/css/style.css', array(), MYTHEMEONE_VERSION);
}

function my_wp_themes_one_enqueue_script()
{
    wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.7.0.slim.min.js', array(), MYTHEMEONE_VERSION);
    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), MYTHEMEONE_VERSION);
    wp_enqueue_script('owl-carousel-2-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), MYTHEMEONE_VERSION);
    wp_enqueue_script('wptheme-script', get_template_directory_uri() . '/js/script.js', array(), MYTHEMEONE_VERSION);
}
add_action('wp_enqueue_scripts', 'my_wp_themes_one_enqueue_style');
add_action('wp_enqueue_scripts', 'my_wp_themes_one_enqueue_script');

// ==================================================================================
// ============================== add custom post type ==============================
// ==================================================================================
function my_wp_themes_one_custom_post_type()
{
    // banner post type
    register_post_type(
        'banners',
        array(
            'labels' => array(
                'name' => __('Our Banners'),
                'singular_name' => __('Banner')
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );

    // service post type
    register_post_type(
        'services',
        array(
            'labels' => array(
                'name' => __('Our Services'),
                'singular_name' => __('Service')
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );

    // process post type
    register_post_type(
        'process',
        array(
            'labels' => array(
                'name' => __('Our Process'),
                'singular_name' => __('Process')
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );

    // department post type
    register_post_type(
        'departments',
        array(
            'labels' => array(
                'name' => __('Our Departments'),
                'singular_name' => __('Department')
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );

    // member post type
    register_post_type(
        'members',
        array(
            'labels' => array(
                'name' => __('Our Members'),
                'singular_name' => __('Member')
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'my_wp_themes_one_custom_post_type');

// ==================================================================================
// ============================== add custom fields ==============================
// ==================================================================================
// add custom meta box
function my_wp_themes_one_custom_box()
{
    add_meta_box(
        'wporg_box_id',
        "Service's Additional Fields",
        'my_wp_themes_one_custom_field',
        'services'
    );

    add_meta_box(
        'mywpthemeone_metabox_id2',
        "Department's Additional Fields",
        'my_wp_themes_one_departments_custom_field',
        'departments'
    );

    add_meta_box(
        'mywpthemeone_metabox_id3',
        "Member's Additional Fields",
        'my_wp_themes_one_members_custom_field',
        'members'
    );
}
add_action('add_meta_boxes', 'my_wp_themes_one_custom_box');

// create services custom field
function my_wp_themes_one_custom_field($post)
{ ?>
    <table class="form-field">
        <tr>
            <th>
                <label for="product-piture">Icon :</label>
            </th>
            <td>
                <input type="text" name="service_item_icon" id="service_item_icon" value="<?php echo get_post_meta($post->ID, 'service_item_icon', true); ?>" />
            </td>
        </tr>
    </table>
<?php }

// create departments custom field
function my_wp_themes_one_departments_custom_field($post)
{ ?>
    <table class="form-field">
        <tr>
            <th>
                <label for="departments_sub_title">Sub Title :</label>
            </th>
            <td>
                <input type="text" name="departments_sub_title" id="departments_sub_title" value="<?php echo get_post_meta($post->ID, 'departments_sub_title', true); ?>" />
            </td>
        </tr>
    </table>
<?php }

// create member custom field
function my_wp_themes_one_members_custom_field($post)
{ ?>
    <table class="form-field">
        <tr>
            <th>
                <label for="members_title">Job TItle :</label>
            </th>
            <td>
                <input type="text" name="members_title" id="members_title" value="<?php echo get_post_meta($post->ID, 'members_title', true); ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <label for="members_facebook">Facebook :</label>
            </th>
            <td>
                <input type="text" name="members_facebook" id="members_facebook" value="<?php echo get_post_meta($post->ID, 'members_facebook', true); ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <label for="members_instagram">Instagram :</label>
            </th>
            <td>
                <input type="text" name="members_instagram" id="members_instagram" value="<?php echo get_post_meta($post->ID, 'members_instagram', true); ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <label for="members_twitter">Twitter :</label>
            </th>
            <td>
                <input type="text" name="members_twitter" id="members_twitter" value="<?php echo get_post_meta($post->ID, 'members_twitter', true); ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <label for="members_linkedin">LinkedIn :</label>
            </th>
            <td>
                <input type="text" name="members_linkedin" id="members_linkedin" value="<?php echo get_post_meta($post->ID, 'members_linkedin', true); ?>" />
            </td>
        </tr>
    </table>
<?php }

// save custom field data
function my_wp_themes_one_save($post_id)
{
    if (isset($_POST['service_item_icon']) && !empty($_POST['service_item_icon'])) {
        update_post_meta($post_id, 'service_item_icon', sanitize_text_field($_POST['service_item_icon']));
    }
    if (isset($_POST['departments_sub_title']) && !empty($_POST['departments_sub_title'])) {
        update_post_meta($post_id, 'departments_sub_title', sanitize_text_field($_POST['departments_sub_title']));
    }
    if (isset($_POST['members_title']) && !empty($_POST['members_title'])) {
        update_post_meta($post_id, 'members_title', sanitize_text_field($_POST['members_title']));
    }
    if (isset($_POST['members_facebook']) && !empty($_POST['members_facebook'])) {
        update_post_meta($post_id, 'members_facebook', sanitize_text_field($_POST['members_facebook']));
    }
    if (isset($_POST['members_instagram']) && !empty($_POST['members_instagram'])) {
        update_post_meta($post_id, 'members_instagram', sanitize_text_field($_POST['members_instagram']));
    }
    if (isset($_POST['members_twitter']) && !empty($_POST['members_twitter'])) {
        update_post_meta($post_id, 'members_twitter', sanitize_text_field($_POST['members_twitter']));
    }
    if (isset($_POST['members_linkedin']) && !empty($_POST['members_linkedin'])) {
        update_post_meta($post_id, 'members_linkedin', sanitize_text_field($_POST['members_linkedin']));
    }
}
add_action('save_post', 'my_wp_themes_one_save');
