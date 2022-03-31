<?php /* Template Name: Servicios */ ?>
<?php
get_header();
?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
</header>
<div class="entry-content portada" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
<?php endwhile; endif; ?>
<?php
$args = [
    'post_type' => 'servicio',
    'post_per_page'=> -1
];
$servicios = new wp_query($args);
// The Loop
if ( $servicios->have_posts() ) {
    echo '<ul class="lista-servicios">';
    while ( $servicios->have_posts() ) {
        $servicios->the_post();
       }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</article>
</main>
<?php get_footer('home'); ?>