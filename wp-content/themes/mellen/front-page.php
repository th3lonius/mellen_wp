<?php get_header(); ?>

<!-- #FEATURES -->
<article id="features">
<?php
 
    $args = array(
        'post_type' => 'features'
    );

    $feature_query = new WP_Query( $args );

?>

<?php if ( $feature_query->have_posts() ) : ?>
    <?php /* Start the Loop */ ?>
    <?php while ( $feature_query->have_posts() ) : $feature_query->the_post(); ?>
   

    <?php endwhile; ?>
    
<?php endif; ?>
</article>

<!-- #PORTFOLIO -->
<article id="portfolio">

    <?php get_template_part( 'portfolio', 'list' ); ?>
    
</article>

<?php get_footer(); ?>