<?php
/*
Template Name: Team
*/

get_header(); ?>

<?php
$content_post = get_post('96');
echo $content_post->post_content;
?>

<?php get_footer(); ?>
