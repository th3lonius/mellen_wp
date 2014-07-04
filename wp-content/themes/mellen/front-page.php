<?php get_header(); ?>

<!-- #FEATURES -->
<article id="features">
        
    <section>
    
        <?php

            $args = array(
                'post_type' => 'features'
            );

            $feature_query = new WP_Query( $args );

        ?>

        <?php if ( $feature_query->have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( $feature_query->have_posts() ) : $feature_query->the_post(); ?>
        
        <?php 
 
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
 
if( $image ) {
 
	echo wp_get_attachment_image( $image, $size );
 
}
 
?>


            <?php endwhile; ?>

        <?php endif; ?>
        
        </section>
        
</article>


<!-- #PORTFOLIO -->
<article id="portfolio">
    
    <header><h3>Portfolio</h3></header>
    
    <section id="portfolio_list">

        <?php get_template_part( 'portfolio', 'list' ); ?>
        
    </section>
    
</article>


<!-- #ABOUT -->
<article id="about">
    
    <header><h3>About</h3></header>
    
    <section>

        <?php get_template_part( 'about', '' ); ?>
        
    </section>
    
</article>

<!-- #CONTACT -->
<article id="contact">
    
    <header><h3>Contact</h3></header>
    
    <section>

        <?php get_template_part( 'contact', '' ); ?>
        
    </section>
    
</article>

<?php get_footer(); ?>