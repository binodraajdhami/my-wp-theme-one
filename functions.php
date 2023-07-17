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
}
add_action('add_meta_boxes', 'my_wp_themes_one_custom_box');

// create form fields
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

// save the data
function my_wp_themes_one_save($post_id)
{
    update_post_meta($post_id, 'service_item_icon', sanitize_text_field(isset($_POST['service_item_icon']) && $_POST['service_item_icon']));
}
add_action('save_post', 'my_wp_themes_one_save');
