 <?php require 'header.php'; ?>
 <div class="contenedor">
    <div class="post">
        <article>
            <H2 class="titulo"><a href="#">Titulo del Articulo</a></H2>
            <p class="fecha">29 de juni 2020</p>
            <div class="thumb">
                <a href="">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, corrupti.</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>
    <div class="post">
        <article>
            <H2 class="titulo"><a href="#">Titulo del Articulo</a></H2>
            <p class="fecha">29 de juni 2020</p>
            <div class="thumb">
                <a href="">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, corrupti.</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>
    <?php require 'paginacion.php'; ?>
</div>
<?php require 'footer.php'; ?>
    
