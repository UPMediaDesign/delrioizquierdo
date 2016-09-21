<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'lawyerphoto' ); ?>

<main class="container-fluid principal">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 liner-bottom bajada desktop">
                <h2><?php echo $post->post_title;?></h2>
                <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
        </div>

        <div class="col-md-10 col-md-offset-1 col-esp">
            <div id="breadcrumbs" class="hidden-xs">
                <ul>
                    
                    <li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
                    <li><a href="<?php echo get_bloginfo('url')?>/equipo/"><span class="fa fa-angle-right"></span> Equipo</a></li>
                    <li><strong><span class="fa fa-angle-right"></span> <?php echo $post->post_title?></strong></li>
                </ul>
            </div>
        </div>

        <figure class="lawyer col-md-8 col-md-offset-2 lawyer-file mobile">
            <!-- Visible en Mobile -->
            <aside class="col-esp col-xs-12 mobile">
                <figure class="col-xs-6 data col-esp">

                    <h2><?php echo $post->post_title;?></h2>
                    <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
                    <a href="mailto:<?php echo get_field('mail_abogado', $post->ID);?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>">
                        <span class="fa fa-envelope"> Contactar</span>
                    </a>
                    
                </figure>
                <img src="<?php echo get_field('foto_perfil', $post->ID);?>" alt="<?php echo $post->post_title; ?>" class="col-xs-6 col-esp">
            </aside>
        </figure>

<?php /*
        <div class="col-md-8 col-md-offset-2 intro-content">
            <p><?php echo $post->post_excerpt;?></p>
        </div>
*/ ?>

        <figure class="lawyer col-md-10 col-md-offset-1 lawyer-file col-esp clr-bg03">
            <!-- Visible en Desktop -->
            <aside class="col-md-4 col-esp desktop">
                <img src="<?php echo get_field('foto_perfil', $post->ID);?>" alt="<?php echo $post->post_title; ?>">
                <figcaption class="clr-bg03 data">
                    <h2><?php echo $post->post_title;?></h2>   
                    <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
                    <a href="mailto:<?php echo get_field('mail_abogado', $post->ID);?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>"><?php echo get_field('mail_abogado', $post->ID);?></a>
                </figcaption>
            </aside>

            <figcaption class="col-md-8 col-esp info">
                <div class="invite-area">
                    <div class="quote-text">
                        <p><?php echo get_field('parrafo_de_referencia', $post->ID);?></p>
                    </div>
                </div>
                <p><?php echo $post->post_content ?></p> 
                
                <div class="clear"></div>
                           
                <div class="lawyer-file" style="margin: 13px 15px 0 15px; padding-top: 10px;">
                	<div class="row">
                		
                		<?php if(get_field('casa_estudios', $post->ID)){?>
						<div class="col-md-12 col-esp"><p><strong>Estudios:</strong> <?php echo get_field('casa_estudios', $post->ID);?></p></div>
					<?php }

					if( get_field('manejo_idiomatico', $post->ID)){?>
						<div class="col-md-12 col-esp"><p><strong>Idiomas:</strong> <?php echo get_field('manejo_idiomatico', $post->ID);?></p></div><?php 
					}
					if( get_field('abogado_area', $post->ID)){?>
						<div class="col-md-12 col-esp"><p><strong>Área de Práctica:</strong> <?php echo get_field('abogado_area', $post->ID);?></p></div>
					<?php }

					if(get_field('contacto_secretaria_email', $post->ID)){?>
						
						<div class="col-md-12 col-esp"><p><strong>Contacto:</strong><a href="tel:<?php echo get_field('contacto_secretaria_fono', $post->ID);?>"><?php echo get_field('contacto_secretaria_fono', $post->ID);?></a> – <a href="mailto:<?php echo get_field('contacto_secretaria_email', $post->ID);?>"  style="color:#fff" ><?php echo get_field('contacto_secretaria_email', $post->ID);?></a></p></div>
					<?php }?>
                		
                	</div>
					
				</div>
                            
            </figcaption>

            <div class="clear"></div>

        </figure>
		
       
       <?php if(get_field('frase_destacada_socio')){?>
        <div class="col-md-10 col-md-offset-1 col-sm-11 invite-area row featured-quote" style="background-color: #2c3e50">
        	
        		<?php echo get_field('frase_destacada_socio')?>	
        
        </div>
		<?php }?>

    </div>
</main>


<?php get_footer('insider'); ?>