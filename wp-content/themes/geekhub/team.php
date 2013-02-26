<?php
/*
Template Name: Team
*/

get_header(); ?>

<?php
$content_post = get_post('96');
echo $content_post->post_content;
?>

<div id="team" class="content">
    <ul>
        <?php
        $content_post = get_post('217');
        echo $content_post->post_content;
        ?>
        <?php
        $content_post = get_post('219');
        echo $content_post->post_content;
        ?>
        <?php
        $content_post = get_post('217');
        echo $content_post->post_content;
        ?>
        <?php
        $content_post = get_post('219');
        echo $content_post->post_content;
        ?>
        <?php
        $content_post = get_post('217');
        echo $content_post->post_content;
        ?>
        <?php
        $content_post = get_post('219');
        echo $content_post->post_content;
        ?>
    </ul>
</div>
<?php get_footer(); ?>
