<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingmid' ); ?>

<main class="container principal">
	<div class="row">

		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

	      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
	      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>

	</div>
</main>

<div class="container-fluid principal">
	<div class="row">

		<div class="col-md-12 intro-content col-esp" style="background-image:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>);background-size: 100%; min-height: 320px; background-repeat: no-repeat; margin-top: 20px;">
		</div>

	</div>
</div>

<div class="container">
	<div class="row">

		<div class="col-md-8 col-md-offset-2 hard-content">
        	<?php echo $post->post_content?>
        </div>

	</div>
</div>

<?php get_footer('insider')?>