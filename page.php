<?php
/**
 *
 */

get_header(); ?>

<?php

$page = get_post(get_the_ID()); echo do_shortcode($page->post_content);


?>

<?php get_footer();
