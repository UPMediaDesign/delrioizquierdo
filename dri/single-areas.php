<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingarea' ); ?>

<main class="container-fluid principal">
	<div class="row">
        
		<div class="col-md-10 col-md-offset-1 bajada">
            <h2><?php echo $post->post_title;?></h2>
            <h3><?php echo get_field('texto_apoyo', $post->ID)?></h3>
		</div>

        <?php /* <div class="col-md-10 col-md-offset-1">
            <div id="breadcrumbs" class="hidden-xs">
                <ul>
                    
                    <li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
                    <li><a href="<?php echo get_bloginfo('url')?>/areas-de-practica/"><span class="fa fa-angle-right"></span> Áreas de Práctica</a></li>
                    <li><strong><span class="fa fa-angle-right"></span> <?php echo $post->post_title?></strong></li>
                </ul>
            </div>
        </div> ?>


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
		<?php */?>
	</div>
</main>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12 intro-content col-esp" style="background-image:url(<?php echo $bg[0]?>);background-size: cover; min-height: 230px; background-repeat: no-repeat; margin-top: 10px; background-position: center;">
		</div>

    </div>
</div>


<div class="container">
    <div class="row">
		<div class="clear miniseparator"></div>
		<div class="col-md-8 col-md-offset-2 hard-content">
        	<?php echo $post->post_content?>
        </div>

        <?php /* ?>
        <div class="col-md-4 col-sm-11 invite-area row">
            <div class="clr-bg03 invite-text">
                <p><?php echo $post->post_excerpt; ?></p>
            </div>
        </div>
        <?php */?>

	</div>
</div>

<?php /* ?>
<section class="container">
  <div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h3 class="another">Otras Áreas</h3>
        <ul class="slider single-areas">
        <?php $areaslide = 0;?>
        <?php $areas = get_posts(array('post_type' => 'areas', 'numberposts' => -1, 'orderby' => 'rand' ,  'suppress_filters' => 0))?>
        <?php foreach($areas as $area):?>
        <?php $areaslide++?>
        
            <li>
                <figure class="col-xs-12 col-esp related">
                    <a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>">
                        <?php echo get_the_post_thumbnail($area->ID , 'related' , array('class' => 'img-responsive'))?>
                    </a>
                    <figcaption >
                        <h4><a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>"><?php echo $area->post_title?></a></h4>
                    </figcaption>
                </figure>
            </li>
        <?php endforeach;?>
        </ul>
    </div>

  </div>
</section>
<?php */ ?>

<script>
    // Este es script del slider, no lo borre 
    jQuery('.slider').bxSlider({
      slideWidth: 250,
      slideMargin:0,
      minSlides: 1,
      maxSlides: 3,
      prevText:'<span class="fa fa-angle-left"></span>',
      nextText:'<span class="fa fa-angle-right"></span>',
      hideControlOnEnd:true,
	  moveSlides:1,
      pager:false,
      responsive:true,
      adaptiveHeight: true,
    });  
</script>

<style>
a.bx-prev {
    font-size: 70px;
    top: 50px;
    left: -20px;
    text-shadow: 0px 0px 2px rgb(0, 0, 0);
}

a.bx-next {
    font-size: 70px;
    color: #fff;
    position: absolute;
    top: 50px;
    text-shadow: 0px 0px 2px rgb(0, 0, 0);
    right: -20px;
}
</style>

<?php get_footer('insider')?>