<?php if( have_rows('images') ) :

	$rows = get_field('images'); // get all the rows
	$first_row = $rows[0]; // get the first row
	$first_row_image = $first_row['image' ]; // get the sub field value
	$size = 'large';
	$image = wp_get_attachment_image_src( $first_row_image, $size );

?>
        
<a href="<?php the_permalink(); ?>">
	<img src="<?php echo $image[0]; ?>" alt="" />
</a>

<?php endif; ?>

<?php the_title( "<h3>", "</h3>" ); ?>

<?php the_excerpt(); ?>