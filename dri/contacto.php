<?php
/*
Template Name: Contacto
*/
?>
<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'footimage' ); ?>

<main class="container principal">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

			 	<h2><?php echo $post->post_title?></h2>
        <h3><?php echo $post->post_excerpt; ?></h3>

		</div>
	</div>
</main>

<section class="container contact-area">
    <div class="row">
        
         <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
         	 <?php echo do_shortcode('[contact-form-7 id="70" title="Formulario de Contacto"]'); ?>
         </div>
        
    </div>
</section>

<?php get_footer('insider')?>