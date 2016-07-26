<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingmid' ); ?>

<main class="container principal">
	<div class="row">

		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">
			<?php $bajadas = get_field('bajada_preheader', $post->ID); ?>
                <?php $countbajadas = 0 ?>
                <?php foreach ($bajadas as $bajada): ?>
                <?php $countbajadas++ ?>

			 	<h2><?php echo $bajada['titular_bajada']?></h2>
                <h3><?php echo $bajada['apoyo_bajada']?></h3>

            <?php endforeach;?>
		</div>

	</div>
</main>

<div class="container-fluid principal">
	<div class="row">

		<?php $services = get_field('imagen_destacada_interior', $post->ID); ?>
		<?php $countservices = 0 ?>
		<?php foreach($services as $service):?>
		<?php $countservices++ ?>
                    
		<div class="col-md-12 intro-content col-esp">
			<img style="max-width: 1280px; max-height: 320px;" src="<?php echo $service['imagen_destacada']?>" alt="<?php echo $post->post_title;?>">
		</div>

		<?php endforeach; ?>

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