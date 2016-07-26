<?php
/*
Template Name: Abogados
*/
?>
<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'footimage' ); ?>

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

    <div class="col-md-10 col-md-offset-1 hard-content">
      <p><?php echo $post->post_excerpt; ?></p>
    </div>

	</div>
</main>

<section class="megacontainer law">
    <div class="row">

        <div class="col-md-3 col-xs-12 col-esp clr-bggr01 area quote only-mobile">
          <?php echo get_field('parrafo_cita', $post->ID);?>
          <span><?php echo get_field('autor_del_parrafo', $post->ID);?></span>

          <?php /*
          <?php $aquotes = get_field('parrafo_referencial', $post->ID); ?>
          <?php $countaquotes = 0 ?>
          <?php foreach ($aquotes as $aquote): ?>
          <?php $countaquotes++ ?>
            <?php echo $aquote['parrafo_cita']?>
            <span><?php echo $aquote['autor_del_parrafo']?> </span>
          <?php endforeach;?>
          */ ?>

        </div>

        <!-- Slider Abogados -->
        <div class="col-md-9 col-xs 12 col-esp">
          <ul class="lawslide slider resp-clear">
            <?php $lawslide = 0;?>
            <?php $lawyers = get_posts(array('post_type' => 'abogados', 'numberposts' => -1))?>
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
                  <?php $lawyers = get_field('datos_abogado', $lawyer->ID); ?>
                  <?php foreach ($lawyers as $dato): ?>
                  <h3><?php echo $dato['cargo_abogado']?></h3>
                  <!-- <a class="desktop" rel="contact" title="Contactar con <?php //echo $lawyer->post_title?>" href="mailto:<?php //echo $dato['mail_abogado']?>"><?php //echo $dato['mail_abogado']?></a> -->
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
          <?php /*
            <?php $aquotes = get_field('parrafo_referencial', $post->ID); ?>
            <?php $countaquotes = 0 ?>
            <?php foreach ($aquotes as $aquote): ?>
            <?php $countaquotes++ ?>
              <?php echo $aquote['parrafo_cita']?>
              <span><?php echo $aquote['autor_del_parrafo']?> </span>
            <?php endforeach;?>
          */ ?>
        </div>
    </div>
</section>

<?php /*

<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 invite-area row">
          <div class="col-md-7 col-sm-8 clr-bg05 quote-text row">
              <p><?php echo $post->post_content?></p>
          </div>
          <div class="col-md-5 col-sm-4 prefoot-image">
              <img src="<?php echo $bg[0]?>" alt="<?php echo $post->post_title; ?>">
          </div>
        </div>
    </div>
</section>

*/ ?>

<section class="container">
    <div class="row">

      <?php $services = get_field('imagen_destacada_interior', $post->ID); ?>
      <?php $countservices = 0 ?>
      <?php foreach($services as $service):?>
      <?php $countservices++ ?>

        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 invite-area row" style="background:url(<?php echo $service['imagen_destacada']?>); background-color: #2c3e50; background-repeat: no-repeat; background-position: 35% 0px;">
          <div class="col-md-8 col-sm-8 clr-bg03 quote-text row">
              <p><?php echo $post->post_content?></p>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
</section>

<script>
    // Este es script del slider, no lo borre 
    jQuery('.slider').bxSlider({
      slideWidth: 600,
      slideMargin:0,
      minSlides: 3,
      maxSlides: 3,
      prevText:'<span class="fa fa-angle-left"></span>',
      nextText:'<span class="fa fa-angle-right"></span>',
      hideControlOnEnd:true,
      pager:false,
      responsive:true,
      adaptiveHeight:true,
    });  
</script>


<?php get_footer('insider')?>