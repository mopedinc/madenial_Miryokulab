<?php
/*
 * Template Name: index.php
 */
?>
<?php get_header(); ?>
<main id="main">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php echo get_the_title(); ?></h1>
<div><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>
<p>index.phpを表示しています</p>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>