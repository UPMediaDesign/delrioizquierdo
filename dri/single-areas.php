<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingarea' ); ?>

<main class="container principal">
	<div class="row">
        
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">
            <h2><?php echo $post->post_title;?></h2>
            <h3><?php echo get_field('texto_apoyo', $post->ID)?></h3>
		</div>

        <div class="col-md-10 col-md-offset-1">
            <div id="breadcrumbs" class="hidden-xs">
                <ul>
                    
                    <li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
                    <li><a href="<?php echo get_bloginfo('url')?>/areas-de-practica/"><span class="fa fa-angle-right"></span> Áreas de Práctica</a></li>
                    <li><strong><span class="fa fa-angle-right"></span> <?php echo $post->post_title?></strong></li>
                </ul>
            </div>
        </div>

		<div class="col-md-5 col-md-offset-1 intro-content">

			<img style="margin-bottom:20px;" src="<?php echo $bg[0]?>" alt="<?php echo $post->post_title; ?>">
            <div class="col-md-12 col-sm-12 clr-bg05 contact-cta">
                <a href="<?php echo get_page_link(15)?>" title="Contáctenos" rel="nofollow">Contáctenos</a>
            </div>

		</div>

		<div class="col-md-5 hard-content">
            <p class="excerpt"><?php echo $post->post_excerpt; ?></p>
        	<?php echo $post->post_content?>
        </div>

	</div>
</main>

<section class="container">
  <div class="row">

    <div class="col-md-10 col-md-offset-1">

        <h3 class="another">Otras Áreas</h3>

        <?php $areaslide = 0;?>
        <?php $areas = get_posts(array('post_type' => 'areas', 'numberposts' => 3, 'orderby' => 'rand',))?>
        <?php foreach($areas as $area):?>
        <?php $areaslide++?>

        <figure class="col-md-4 col-sm-6 col-xs-12 col-esp related">
            <a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>">
                <?php echo get_the_post_thumbnail($area->ID , 'related' , array('class' => 'img-responsive'))?>
            </a>
            <figcaption >
                <h4><a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>"><?php echo $area->post_title?></a></h4>
            </figcaption>
        </figure>

        <?php endforeach;?>

    </div>

  </div>
</section>

<?php get_footer('insider')?>