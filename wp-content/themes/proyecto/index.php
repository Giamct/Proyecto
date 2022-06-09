
<?php /*template name: Inicio*/
 get_header();?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  

		  <div class="banner">
    <div class="capa"></div>
    <div class="info">
      <h1>Bienvenidos a SLee Dw</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias nobis debitis provident ut odio aperiam quibusdam. Amet, neque, illo.</p>
      <a href="https://www.youtube.com/"></a>
    </div>
  </div>

  

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <h2 id="comidarecomendada">.</h2>
          <h2 class="comidarecomendadas">"COMIDAS RECOMENDADAS"</h2>
        </div>
      <div class="col-sm-6"> 

        <p class="latino"><img src="<?php the_field('imagen_1')?>" width="100%"></p>

      </div>

      <div class="col-sm-6">
        <h2 class="comidalatin"><?php the_field('titulo_1')?></h2>
        <p class="resumenlatin"><?php the_field('texto_1')?>
        <br>
        <a class="boton1" href="#"><?php the_field('boton_1')?></a></p>

      </div>

       <div class="col-sm-6"> 

        <h2 class="comidalatin">Comida Europea</h2>
        <p class="resumenlatin">Son muchos los países europeos y abundante la variedad gastronómica que se puede encontrar en cada uno de ellos, con sus alimentos, recetas típicas y tradicionales. Dentro de muchos países, dependiendo de la región, el modo de preparar la misma receta puede variar enormemente. Igual ocurre en cada país europeo, aunque se trate de la misma receta, cada país tiene su propio sello y firma gastronómica. 
        <br>
        <a class="boton1" href="#">Ver mas</a></p>

      </div>

      <div class="col-sm-6">

        <p class="latino"><img src="https://viaturi.com/wp-content/uploads/2017/06/platos-y-comidas-europeas.jpg" width="100%"></p>

      </div>

      <div class="row">
      <div class="col-sm-6"> 

        <p class="latino"><img src="https://i.blogs.es/346716/comida-chian/450_1000.jpg" width="100% "></p>

      </div>

      <div class="col-sm-6">

        <h2 class="comidalatin">Comida Asiatica</h2>
        <p class="resumenlatin">Así, la dieta oriental o asiática abarca la cocina china, japonesa, india y tailandesa, y a pesar de que todas poseen su propia marca, comparten varias características como la abundancia de legumbres y arroz, de pescados, verduras y el poco uso de las carnes y de los dulces. 
        <br>
        <a class="boton1" href="#">Ver mas</a></p>

      </div>


  </div>
</div>



<div class="container">
        <div class="row">
            <div class="col s12">
                
                <p id="postres"><h1 class="center-align titulo">Postres</h1></p>

                <div class="carousel center-align">
                    <div class="carousel-item">
                        <h2 class="subtitulo">Donas</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Glaseadas</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/dona-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Pastel</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Chocolate</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/pastel-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Donas</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Glaseadas</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/dona-02.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Pastel</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Chocolate</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/pastel-02.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Muffin</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Chocolate</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/muffins-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Muffin</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Glaseadas</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/muffins-02.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Muffin</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Chispas de chocolate</p>
                        <a class="carr" href="#">Ver mas</a>
                        <img src="<?php bloginfo("template_url");?>/img/muffins-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    <!-- JS Main -->
    <script src="<?php bloginfo("template_url");?>/js/main.js"></script>

    <div class="container">
    <div class="row">
      <div class="col-sm-12">
            <h2 id="aprendeacocinar">.</h2>
            <h2 class="cocina"> "APRENDE A COCINAR" </h2>
          </div>
      <div class="col-sm-6"> 
        <h2 class="comidalatin">Aprender y descubrir</h2>
        <p class="resumenlatin">Una lección para consumir productos de manera consciente y responsable. Acceder a ingredientes y platos de diferentes lugares del mundo es una manera práctica de aprender y descubrir tradiciones y costumbres de todas las culturas, porque la cocina es la protagonista de todas ellas.
        <br>
        <a class="boton1" href="#">Ver mas</a></p>


      </div>

      <div class="col-sm-6">

        <p class="latino"><img src="https://dam.cocinafacil.com.mx/wp-content/uploads/2020/08/cocinar-mas-rapido.jpg" width="100%"></p>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 id="recetass"> "RECETAS" </h2>
          </div>
          <div class="col-sm-4">
            <div class="botar">
            <img class="imgtitulo" src="https://t1.rg.ltmcdn.com/es/posts/7/4/1/ceviche_peruano_18147_orig.jpg" width="100%">
            <h2 class="aprendetitulo">Ceviche peruano de corvina</h2>
            <p class="resutitulo">El ceviche, cebiche o seviche es un plato originario de Perú. Consiste en macerar el pescado o marisco sumergido en lima y servido con su jugo bien…
            <br>
            <a class="boton1" href="#">Ver mas</a></p></p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="botar">
            <h2 class="aprendetitulos">Causa limeña</h2>
            <p class="resutitulo">Un plato de gran tradición y más apreciado en Perú es la causa limeña. Un entrante frío donde el ají, la patata y el limón son los protagonistas. Se…
            <br>
            <a class="boton1" href="#">Ver mas</a></p>
            </p>
            
            <img class="imgtitulos" src="https://recetascocinaperuana.com/wp-content/uploads/2021/06/causa-limena.jpg" width="100%">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="botar">
            <img class="imgtitulo" src="https://www.comedera.com/wp-content/uploads/2022/03/Anticucho-shutterstock_185287433.jpg" width="100%">
            <h2 class="aprendetitulo">Anticucho peruanos</h2>
            <p class="resutitulo">Uno de los platos típicos que solemos encontrar en restaurantes peruanos y puestos de comida callejera, son los anticuchos, unas brochetas de corazón…
            <br><a class="boton1" href="#">Ver mas</a></p></p>

            </div>
          </div>
        </div>
      </div>

      <div class="container">
    <div class="row">
      <div class="col-sm-6"> 

        <p class="latino3"><img src="https://res.cloudinary.com/restaurant-pe-v2/images/f_auto,q_auto/w_2560,h_1610/v1618512258/rest/rest.jpg" width="100%"></p>

      </div>

      <div class="col-sm-6">
        <h2 class="comidalatin2" >Reseñas</h2>
        <p class="resumenlatin">Excelente restaurante sin un solo pero. Ambiente selecto y tranquilo, servicio impresionante, Alta cocina con excelente presentación. Postres impresionantes. Correcta relación calidad precio.
        <br>
        <a class="boton1" href="#">Ver mas</a></p>

      </div>

      <?php get_footer();?>


