<?php
/**
 * Cards Component Template.
 *
 * @package abraham
 */

$video = hybrid_media_grabber(
	array(
		'type'        => 'video',
		'split_media' => true,
	)
);
?>
<article <?php hybrid_attr( 'post' ); ?>>

			<?php
			if ( $video ) {
				echo $video;

			} else {
				get_the_image(array(
					'size'               => 'large',
					'image_class'        => 'arch-1of1 o-crop__content',
					'before'             => '<div class="card-img arch-overflow-hidden o-crop o-crop--16x9">',
					'after'              => '</div>',
				));
			}
			?>

		<header <?php hybrid_attr( 'entry-header' ); ?>>

			<?php arch_title(); ?>

		</header>

		<?php arch_excerpt(); ?>

</article>

<?php