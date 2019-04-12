<?php
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus'))
{ register_nav_menus( array( 'main' => 'Main Nav' ) ); }

                /*виджеты*/

function register_my_widgets(){
    register_sidebar( array(
        'name' => 'название фирм',
        'id' => 'homepage-sidebar',
        'description' => 'Выводиться.',
        'before_widget' => '<p class="homepage-widget-block">',
        'after_widget' => '</p>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'поиск',
        'id' => 'homepage',
        'description' => 'поисковик',
        'before_widget' => '<p class="homepage-widget-block">',
        'after_widget' => '</p>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'register_my_widgets' );


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

/*корзина*/
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

/*убираем лишние поля*/

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );


function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['account']['account_username']);
    //unset($fields['account']['account_password']);
    //unset($fields['account']['account_password-2']);
    return $fields;

}
/*фильтр*/
function custom_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["popularity"]); // по популярности
    unset($orderby["rating"]); // по рейтингу
    unset($orderby["date"]); //по новизне или по дате
//  unset($orderby["price"]); //по цене возврастания
//  unset($orderby["price-desc"]); // по цене убывания
return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "custom_woocommerce_catalog_orderby", 20 );

/*есть в наличии*/
function my_stock_loop() {
    global $product;
    if ( $product->is_in_stock() ) {
        echo '<div class="stock" >' . $product->get_stock_quantity() . ' в наличии</div>';
    } else {
        echo '<div class="out-of-stock" >Нет в наличии</div>';
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'my_stock_loop' );
add_action( 'woocommerce_before_single_product_summary', 'my_stock_loop' );
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');


/*последовательность полей*/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating',10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating',10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);

require_once (dirname(__FILE__) . '/sample/sample-config.php');














