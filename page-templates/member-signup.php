<?php
/**
 * Template Name: Member Signup
 *
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<style>
    .s2member-wrap{
        max-width:800px;
        margin:200px auto 100px;
        padding:20px;
    }
    .s2member-wrap .btn,
    .ws-plugin--s2member-pro-login-widget .btn {
        margin: 0 !important;
    }
</style>

<div class="s2member-wrap">
    <?php echo s2member_pro_login_widget(); ?>
</div>


<script>
jQuery('.ws-plugin--s2member-pro-login-widget-lost-password').contains('| ').remove();​
</script>


<?php get_footer(); ?>