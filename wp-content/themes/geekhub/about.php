<?php
/*
Template Name: About
*/

get_header(); ?>

<?php
$content_post = get_post('98');
echo $content_post->post_content;
 ?>

<?php get_footer(); ?>
