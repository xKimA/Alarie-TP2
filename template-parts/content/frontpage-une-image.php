<?php
/**
 * Template part pour afficher les catégories du front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:30% auto">
	<figure class="wp-block-media-text__media">	
	<a href="<?php the_permalink(); ?>">
	<?php
			$image = get_field('mon_image');
			$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?></a>
		<figcaption style="color:#32bca8;">
		<?php the_title();?>
		</figcaption>
    </figure>
    <div class="wp-block-media-text__content">
        <p style="background-color:#32bca8; color:white; box-shadow:5px 10px black; text-align:justify;" class="has-background has-drop-cap has-small-font-size">

            <?php  echo get_the_excerpt();  ?>
        </p>
	</div>	
</div>

		


