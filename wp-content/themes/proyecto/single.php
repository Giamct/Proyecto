<?php get_header();?>
<link rel="stylesheet" type="text/css" href="mainfinal.css">
    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="aprendetitulos"><?php the_title (); ?></h2>
            <p class="resutitulo"><?php the_excerpt (); ?><br></p>
          </div>
        </div>
      

      <div class="row">
        <div class="col-sm-12">
          <p class="final"><img class="imgtitulos" src="<?php the_post_thumbnail_url ("large") ?>" width="40%"></p>
        </div>
      </div>

      <div class="row">
          <div class="col-sm-4">
            <h2 class="aprendetitulosfinal">Ingredientes</h2>
            <div class="ingredientesfinal">
            <?php the_field ('ingredientes'); ?>
</div>
          </div>

          <div class="col-sm-4">
            <h2 class="aprendetitulos"></h2>
            <p class="resutitulo"><br></p>
          </div>

          <div class="col-sm-4">
            <h2 class="aprendetitulos">Â¿Como se hace?</h2>
            <div class="ingredientesfinal">
            <?php the_field ('como_se_hace'); ?>
</div>
          </div>
        </div>

        <div class="col-sm-12">
        <?php the_content (); ?>
          </div>


    </div>
    <?php get_footer() ?>
