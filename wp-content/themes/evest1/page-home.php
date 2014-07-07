<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article>
    <header id="page-heading">
        <div class="property">I am a Property Owner</div>
        <div class="county">I am a County</div>
        <div class="contractor">I am a Contractor</div>
    </header>
    <!-- /page-heading -->
    
    <div class="post full-width clearfix">
    <?php the_content(); ?>
    </div>
    <!-- /post -->
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>