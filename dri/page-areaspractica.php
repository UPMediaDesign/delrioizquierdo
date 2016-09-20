<?php
/*
Template Name: Áreas de Práctica
*/
?>
<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'footimage' ); ?>

<main class="container principal">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 liner-bottom bajada">

      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>

    </div>

    <div class="col-md-10 col-md-offset-1 hard-content">
      <p><?php echo $post->post_excerpt; ?></p>
    </div>

  </div>
</main>

<section class="megacontainer area">
    <div class="row">

        <div class="col-md-3 col-xs-12 col-esp clr-bggr01 area quote only-mobile">
          <?php echo get_field('parrafo_cita', $post->ID);?>
          <span><?php echo get_field('autor_del_parrafo', $post->ID);?></span>

        </div>

        <!-- Slider Áreas de Práctica -->
        <div class="col-md-9 col-xs-12 col-esp">
          <ul class="areaslide slider resp-clear only-desktop only-tablet">
              <?php 
			  wp_reset_query(); 
			  $areaslide = 0;
			  
			  
			  ?>
              <?php $areas = get_posts(array('post_type' => 'areas', 'numberposts' => -1  ,  'suppress_filters' => 0 ))?>
              
              <?php foreach($areas as $area):?>
              <?php $areaslide++?>
              
              <?php /* <li class="col-md-3 col-sm-6 col-xs-12 col-esp">
                <figure>
                  <a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>">
                    <img class="" src="<?php echo get_field('imagen_vista_principal', $area->ID)?>" alt="<?php echo $area->post_title?>"></a>
                  <figcaption >
                    <h4><a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>"><?php echo $area->post_title?></a></h4>
                  </figcaption>
                </figure>
              </li> */?>
              
              <li class="col-md-3 col-sm-6 col-xs-12 col-esp">
                <figure>
                 
                 <?php $imgAreaid = get_field('imagen_vista_principal', $area->ID)?>
				 <?php $imgArea = wp_get_attachment_image_src( $imgAreaid, 'staff' ); ?>
                 
                  <a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>" style="background-image:url(<?php echo $imgArea[0]?>)">
                    <img class="" src="<?php echo $imgArea[0]?>" alt="<?php echo $area->post_title?>" style="visibility:hidden">
                  </a>
                  <figcaption >
                    <h4><a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>"><?php echo $area->post_title?></a></h4>
                  </figcaption>
                </figure>
              </li>
              
              <?php endforeach;?>
          </ul>
        </div>

        <!-- Slider Áreas de Práctica Phones -->
        <div class="col-md-9 col-xs-12 col-esp only-mobile none-tablet">
          <ul class="areaslide resp-clear">
              <?php $areaslide = 0;?>
              
              <?php //$areas = get_posts(array('post_type' => 'areas', 'numberposts' => -1 , 'suppress_filters' => true ))?>
              <?php foreach($areas as $area):?>
              <?php $areaslide++ ?>
			
				<?php $imgAreaid = get_field('imagen_vista_principal', $area->ID)?>
				<?php $imgArea = wp_get_attachment_image_src( $imgAreaid, 'related' ); ?>
	
              <li class="col-md-3 col-sm-6 col-xs-12 col-esp">
                <figure>
                  <a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>">
		
		
                    <img class="grayscale" src="<?php echo $imgArea[0]?>" alt="<?php echo $area->post_title?>"></a>
                  	<figcaption style="background-image:url(<?php echo $imgArea[0]?>)">
                    <h4><a href="<?php echo get_permalink($area->ID)?>" rel="nofollow" alt="<?php echo $area->post_title?>"><?php echo $area->post_title?></a></h4>
                  </figcaption>
                </figure>
              </li>
              <?php endforeach;?>
          </ul>
        </div>

        <!-- Fin Slider Áreas de Práctica -->
        
        <div class="col-md-3 col-xs-12 col-esp clr-bggr01 area quote only-desktop">
          <?php echo get_field('parrafo_cita', $post->ID);?>
          <span><?php echo get_field('autor_del_parrafo', $post->ID);?></span>

        </div>
    </div>
</section>

<section class="container" id="texto_footer">
    <div class="row">

      <div class="col-md-12 col-sm-12 invite-area row" style="background:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>); background-color: #2c3e50; background-repeat: no-repeat;">
        <div class="clr-bg03 quote-text row">
          <p><?php echo $post->post_content?></p>
        </div>
      </div>


    </div>
</section>

<script>
    // Este es script del slider, no lo borre 
    jQuery('.slider').bxSlider({
      slideWidth: 600,
      slideMargin:0,
      minSlides: 4,
      maxSlides: 4,
      prevText:'<span class="fa fa-angle-left"></span>',
      nextText:'<span class="fa fa-angle-right"></span>',
      hideControlOnEnd:true,
      pager:false,
      responsive:true,
      adaptiveHeight: true,
    });  
</script>

<?php get_footer('insider')?>