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
    
    <header>
	    <h3>Portfolio</h3>
        <?php

            $args = array(
                'post_type' => 'page',
                'pagename'  => 'portfolio'
            );

            $query = new WP_Query( $args );

        ?>
		<?php if ( $query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php get_template_part( 'article', 'header' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
    </header>
    
    <section id="portfolio_list">

        <?php get_template_part( 'portfolio', 'list' ); ?>
        
    </section>
    
</article>


<!-- #ABOUT -->
<article id="about">
    
    <header>
	    <h3>About</h3>
        <?php

            $args = array(
                'post_type' => 'page',
                'pagename'  => 'about'
            );

            $query = new WP_Query( $args );

        ?>
		<?php if ( $query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php get_template_part( 'article', 'header' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
    </header>
    
    <section>

        <?php get_template_part( 'about', '' ); ?>
        
    </section>
    
</article>

<!-- #NEWS -->
<article id="news">
        
	<?php

		$args = array(
			'post_type' => 'post',
		);

		$query = new WP_Query( $args );

	?>
	<?php if ( $query->have_posts() ) : ?>
    
    <header>
	    <h3>News</h3>
	    
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php get_template_part( 'recent', 'posts' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
    </header>
    
    <section>
    
    <?php if ( $query->have_posts() ) : ?>

    <ul class="work-grid">
    
    	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    	
    	<li class="item">
        	<?php get_template_part( 'news', 'list' ); ?>
        </li>
        	
		<?php endwhile; ?>
		
	</ul>

	<?php endif; ?>
    
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