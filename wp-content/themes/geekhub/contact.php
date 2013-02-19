<?php
/*
Template Name: Contact
*/

get_header(); ?>

<?php
$content_post = get_post('93');
echo $content_post->post_content;
?>

<?php get_footer(); ?>
