<?php
/*
Template Name: Abogados
*/
?>
<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'footimage' ); ?>

<main class="container-fluid principal">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>

		</div>

    <div class="col-md-10 col-md-offset-1 hard-content col-esp">
      <p><?php echo $post->post_excerpt; ?></p>
    </div>

	</div>
</main>

<section class="container-fluid law">
    <div class="row">

        <div class="col-md-3 col-xs-12 col-esp clr-bggr01 area quote only-mobile">
          <?php echo get_field('parrafo_cita', $post->ID);?>
          <span><?php echo get_field('autor_del_parrafo', $post->ID);?></span>

        </div>

        <!-- Slider Abogados -->
        <div class="col-md-9 col-xs 12 col-esp">
          <ul class="lawslide slider resp-clear">
            <?php $lawslide = 0;?>
            <?php $lawyers = get_posts(array('post_type' => 'abogados', 'numberposts' => -1, 'orderby' => 'post_date', 'suppress_filters' => 0))?>
            <?php foreach($lawyers as $lawyer):?>
            <?php $lawslide++?>
            <li class="col-md-4 col-sm-6 col-xs-6 col-esp">
              <figure>
                <a href="<?php echo get_permalink($lawyer->ID)?>" rel="nofollow">
                    <?php echo get_the_post_thumbnail($lawyer->ID , 'staff' , array('class' => 'testiimagen grayscale'))?>
                </a>       
                <figcaption>
                  <h4>
                    <a href="<?php echo get_permalink($lawyer->ID)?>" rel="nofollow"><?php echo $lawyer->post_title?></a>
                  </h4>
                  <?php $lawyersinfo = get_field('datos_abogado', $lawyer->ID); ?>
                  <?php foreach ($lawyersinfo as $dato): ?>
                  <h3><?php echo $dato['cargo_abogado']?></h3>
                  <?php endforeach;?>
                </figcaption>
              </figure>
            </li>
            <?php endforeach;?>
          </ul>
        </div>

        <!-- Fin Slider Abogados -->
        
        <div class="col-md-3 col-xs-12 col-esp clr-bggr01 quote only-desktop">
          <?php echo get_field('parrafo_cita', $post->ID);?>
          <span><?php echo get_field('autor_del_parrafo', $post->ID);?></span>

        </div>
    </div>
<?php /*?>
    <div class="row">
      <div class="container">
        
        
            <div class="clear miniseparator"></div>
            <div class="col-md-12 col-esp">
        <?php foreach($lawyers as $individuals):?>
                    
                    <div class="col-md-2 col-xs-6 lawyerlist">
                        <a href="<?php echo get_permalink($individuals->ID)?>">
                            
                            <?php echo $individuals->post_title?>
                            <span class="fa fa-angle-right pull-right"></span>
                        </a>
                        <div class="clear miniseparator border"></div>
                    </div>
                    
                <?php endforeach;?>
            </div>
            
        </div>
      
        
    </div>
<?php */?>
<div class="clear miniseparator"></div>
</section>

<?php /* ?>

<section class="container">
    <div class="row">


        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 invite-area row" style="background:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>); background-color: #2c3e50; background-repeat: no-repeat; background-position: 35% 0px;">
          <div class="clr-bg03 quote-text row">
              <p><?php echo $post->post_content?></p>
          </div>
        </div>

    </div>
</section>

<?php */ ?>
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
      adaptiveHeight:true,
    });  
</script>


<?php get_footer('insider')?>