<?php
/*
Template Name: About
*/

get_header(); ?>

<?php
$content_post = get_post('98');
echo $content_post->post_content;
 ?>

<div class="content" id="about">
<?php
$content_post = get_post('211');
echo $content_post->post_content;
?>
</div>

<?php get_footer(); ?>
