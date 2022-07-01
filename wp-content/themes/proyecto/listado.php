<?php /*template name: Listado*/
 get_header();?>
    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <div class="container">
        <div class="row">

<?php $articulos = new wp_query ([
    'post_type' => 'receta',
                                 'showposts' => 20
                                ]);
    while ($articulos->have_posts()){
        $articulos->the_post(); ?>





          <div class="col-sm-4">
            <div class="botar">
            <img class="imgtitulo" src="<?php the_post_thumbnail_url ("large") ?>" width="100%" height="56%">
            <h2 class="aprendetitulo"><?php the_title (); ?> </h2>
            <div class="resutitulo"> <?php the_excerpt (); ?></div>
            <br>
            <a class="boton1" href="listadofinal4.html">Ver mas</a></p>
            </div>
          </div>

<?php } ?>


</div>
      </div>
<?php get_footer() ?>