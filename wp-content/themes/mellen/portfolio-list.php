<?php /* Template Name: Portfolio List Section */ ?>

<?php
 
    $args = array(
        'post_type' => 'portfolio'
    );

    $work_query = new WP_Query( $args );

?>

<?php if ( $work_query->have_posts() ) : ?>
    
    <a class="exit"></a>
    
    <nav>
		<ul class="filters">
			<?php $categories = get_categories(); ?>
			<li><span class="filter active" data-filter="mix_all">All</span></li>
			
			<?php
			foreach($categories as $category)
			echo '<li><span class="filter" data-filter="'.$category->category_nicename.'">'.$category->cat_name.'</span></li>';
			?>
		</ul>
    </nav>

    <ul class="work-grid">

    <?php /* Start the Loop */ ?>
    <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>

        <?php if( have_rows('images') ) :

            $rows = get_field('images'); // get all the rows
            $first_row = $rows[0]; // get the first row
            $first_row_image = $first_row['image' ]; // get the sub field value
			$size = 'thumbnail';
            $image = wp_get_attachment_image_src( $first_row_image, $size );

        ?>
       
        <li class="item <?php
        foreach((get_the_category()) as $category) {
        echo $category->category_nicename . ' '; } ?>" data-cat="<?php echo $category->category_nicename . ' '; ?>">
        	<figure>
        		<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $image[0]; ?>" alt="" />
					<figcaption class="label">
						<h4><?php the_title() ;?></h4>
					</figcaption>
				</a>
			</figure>
        </li><!-- /.portfolio -->

		<?php endif; ?>

    <?php endwhile; ?>

    </ul>

<?php endif; ?>