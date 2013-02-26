<?php
/*
Template Name: Home
*/

get_header('home'); ?>

<?php
$content_post = get_post('100');
echo $content_post->post_content;
?>

<div class="content">
<?php
$content_post = get_post('187');
echo $content_post->post_content;
?>

<ul class="courses">
<?php
$content_post = get_post('147');
echo $content_post->post_content;

$content_post = get_post('151');
echo $content_post->post_content;

$content_post = get_post('154');
echo $content_post->post_content;

$content_post = get_post('158');
echo $content_post->post_content;

$content_post = get_post('162');
echo $content_post->post_content;

$content_post = get_post('165');
echo $content_post->post_content;

$content_post = get_post('168');
echo $content_post->post_content;

$content_post = get_post('171');
echo $content_post->post_content;
?>
</ul>
</div>
<?php get_footer(); ?>
