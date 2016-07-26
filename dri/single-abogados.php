<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'lawyerphoto' ); ?>

<main class="container principal">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 liner-bottom bajada">
                <h2><?php echo $post->post_title;?></h2>
                <?php $datos = get_field('datos_abogado', $post->ID); ?>
                <?php $countdatos = 0 ?>
                <?php foreach ($datos as $dato): ?>
                <?php $countdatos++ ?>
                <h3><?php echo $dato['cargo_abogado']?></h3>
                <?php endforeach;?>
        </div>

        <figure class="lawyer col-md-8 col-md-offset-2 lawyer-file mobile">
            <!-- Visible en Mobile -->
            <aside class="col-esp col-xs-12 mobile">
                <figure class="col-xs-6 data col-esp">
                    <h2><?php echo $post->post_title;?></h2>
                    <?php foreach ($datos as $dato): ?>
                    <h3><?php echo $dato['cargo_abogado']?></h3>
                    <a href="mailto:<?php echo $dato['mail_abogado']?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>">
                        <span class="fa fa-envelope"> Contactar</span>
                    </a>
                    <?php endforeach;?>
                </figure>
                <img src="<?php echo $dato['foto_perfil']?>" alt="<?php echo $post->post_title; ?>" class="col-xs-6 col-esp">
            </aside>
        </figure>

        <div class="col-md-8 col-md-offset-2 intro-content">
            <p><?php echo $post->post_excerpt;?></p>
        </div>

        <figure class="lawyer col-md-8 col-md-offset-2 lawyer-file">
            <!-- Visible en Desktop -->
            <aside class="col-md-5 col-esp desktop">
                <img src="<?php echo $dato['foto_perfil']?>" alt="<?php echo $post->post_title; ?>">
                <figcaption class="clr-bg05 data">
                    <h2><?php echo $post->post_title;?></h2>
                    <?php foreach ($datos as $dato): ?>
                    <h3><?php echo $dato['cargo_abogado']?></h3>
                    <a href="mailto:<?php echo $dato['mail_abogado']?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>"><?php echo $dato['mail_abogado']?></a>
                    <?php endforeach;?>
                </figcaption>
            </aside>

            <figcaption class="col-md-7 col-esp clr-bg06 info">
                <p><?php echo $post->post_content ?></p>
                <?php foreach ($datos as $dato): ?>
                <p><?php echo $dato['membresia_abogado']?></p>
                <p><strong>Idiomas:</strong> <?php echo $dato['manejo_idiomatico']?></p>
                <?php endforeach;?>
            </figcaption>

        </figure>

        <?php /*
        <div class="col-md-8 col-md-offset-2 col-sm-11 invite-area row">
            <div class="col-md-8 col-sm-8 clr-bg03 quote-text">
                <?php $datos = get_field('datos_abogado', $post->ID); ?>
                <?php $countdatos = 0 ?>
                <?php foreach ($datos as $dato): ?>
                <?php $countdatos++ ?>
                <p><?php echo $dato['parrafo_referencia']?></p>
                <?php endforeach;?>
            </div>
            <div class="col-md-4 col-sm-4 prefoot-image lawimg">
                <?php foreach ($datos as $dato): ?>
                <img src="<?php echo $dato['imagen_referencia'] ?>" alt="">
                <?php endforeach;?>
            </div>
        </div>
        */ ?>

        <div class="col-md-8 col-md-offset-2 col-sm-11 invite-area row" style="background:url(<?php echo $dato['imagen_referencia'] ?>); background-size: 260px; background-color: #2c3e50; background-repeat: no-repeat; background-position: 100% 0px;">
            <div class="col-md-8 col-sm-8 clr-bg03 quote-text">
                <?php $datos = get_field('datos_abogado', $post->ID); ?>
                <?php $countdatos = 0 ?>
                <?php foreach ($datos as $dato): ?>
                <?php $countdatos++ ?>
                <p><?php echo $dato['parrafo_referencia']?></p>
                <?php endforeach;?>
            </div>
            
        </div>

    </div>
</main>


<?php get_footer('insider'); ?>