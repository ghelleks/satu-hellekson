<?php

/*
 * Make the fonts come from us, not Google
 */
function satu_hellekson_replace_fonts() {

    wp_deregister_style( array('satu-fonts') );
    wp_dequeue_style( array('satu-fonts') );

    wp_register_style( 'satu-hellekson-roboto', '/wp-content/uploads/roboto/roboto_condensed_macroman/stylesheet.css');
    wp_enqueue_style( 'satu-hellekson-roboto' );

}
add_action( 'wp_print_styles', 'satu_hellekson_replace_fonts', 99999 );

/*
 * Support the Twitter Card plugin from Niall: https://github.com/niallkennedy/twitter-cards
 */
if ( ! function_exists( 'add_twitter_card_properties' ) ) {
add_filter( 'twitter_cards_properties', 'add_twitter_card_properties' );
function add_twitter_card_properties( $twitter_card ) {
        if ( is_array( $twitter_card ) ) {
                $twitter_card['site'] = '@ghelleks';
                $twitter_card['site:id'] = '7373472';
                $twitter_card['creator'] = '@ghelleks';
                $twitter_card['creator:id'] = '7373472';
        }
        return $twitter_card;
} }

@ini_set( 'upload_max_size' , '8M' );

?>
