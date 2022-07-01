
<?php /*template name: Inicio*/
 get_header();?>
<script src="<?php bloginfo("template_url");?>/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <div class="banner">
<div class="capa"></div>
<div class="info">
</div>
</div>

<div class="container">
<div class="row">
  <div class="col-sm-12">
      <h2 id="recetass">.</h2>
      <h2 class="comidarecomendadas">"Recetas"
      </h2>
    </div>



    <?php $caja1 = get_field("caja_1"); ?>
  <div class="col-sm-6"> 

    <p class="latino"><img src="<?php echo $caja1['imagen']; ?>" width="50%"></p>

  </div>

  <div class="col-sm-6">
    <h2 class="comidalatin"><?php echo $caja1['titulo']; ?></h2>
    <p class="resumenlatin"><?php echo $caja1['texto']; ?>
    <br>
    <a class="boton1" href="<?php echo $caja1['boton']; ?>">Ver mas</a></p>
  </div>





  <?php $caja2 = get_field("caja_2"); ?>
   <div class="col-sm-6"> 

    <h2 class="comidalatin"><?php echo $caja2['titulo']; ?></h2>
    <p class="resumenlatin"><?php echo $caja2['texto']; ?>
    <br>
    <a class="boton1" href="<?php echo $caja2['boton']; ?>">Ver mas</a></p>

  </div>

  <div class="col-sm-6">

    <p class="latino"><img src="<?php echo $caja2['imagen']; ?>" width="50%"></p>

  </div>






  <div class="row">
  <?php $caja3 = get_field("caja_3"); ?>
  <div class="col-sm-6"> 

    <p class="latino"><img src="<?php echo $caja3['imagen']; ?>" width="50% "></p>

  </div>

  <div class="col-sm-6">

    <h2 class="comidalatin"><?php echo $caja3['titulo']; ?></h2>
    <p class="resumenlatin"><?php echo $caja3['texto']; ?> 
    <br>
    <a class="boton1" href="<?php echo $caja2['boton']; ?>">Ver mas</a></p>

  </div>

</div>
</div>





<div class="text">
     <h1>Carousel Responsive</h1>
     <div class="row">
        <div class="col-sm-12">
            <a href="./listado.html"><h2 class="masrecetas2">"Más recetas" </h2></a>
        </div>
    </div>
 <p id="postres">.</p>
 <div class="col-sm-12"><h2 class="postres">Postres</h2></div>
 <div class="products_body center">
     <div class="wrapper">
         <div class="container">
             <img class="top" src="<?php bloginfo("template_url");?>/img/dona-01.jpg" alt="">
             <div class="bottom">
                 <div class="left">
                     <div class="details">
                         <h2 class="txt_products">Dona</h2>
                         <p>Con capa de vainilla</p>
                     </div>
                     <div class="buy">
                         <a href="#">
                             <i class="fas fa-cart-plus"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="inside">
             <div class="icon">
                 <i class="far fa-eye"></i>
             </div>
             <div class="contents">
                 <h1>Ingredientes <br></h1>
                 <p>-120ml leche, tibia (40 °C)<br>
                    -100g azúcar en polvo, dividido<br>
                    -1 paquete (2 ¼ cucharaditas) levadura seca activa<br>
                    -1 grande huevo<br>
                    -2 cucharadas agua<br>
                    -1 cucharadita extracto de vainilla<br>
                    -450g harina, más para espolvorear<br>
                    -1 cucharadita sal<br>
                    -60g mantequilla sin sal, derretida<br>
                    -Según se requiera aceite, para engrasar<br>
                    -Para el glaseado de vainilla<br>
                    -1 cucharadita jarabe de oro<br>
                    -120g azúcar glasé<br>
                    -1 cucharada agua<br>
                    -¼ de cucharadita extracto de vainilla<br></p>
             </div>
         </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <img class="top" src="<?php bloginfo("template_url");?>/img/dona-02.jpg" alt="">
            <div class="bottom">
                <div class="left">
                    <div class="details">
                        <h2 class="txt_products">Dona</h2>
                        <p>Con capa de chocolate</p>
                    </div>
                    <div class="buy">
                        <a href="#">
                            <i class="fas fa-cart-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="inside">
            <div class="icon">
                <i class="far fa-eye"></i>
            </div>
            <div class="contents">
                <h1>Ingredientes</h1>
                <p>
                  -2 Piezas Huevo <br>
                  -3 Cucharadas Azúcar <br>
                  -2 Cucharadas Esencia de vainilla <br>
                  -2 Cucharadas Esencia de naranja <br>
                  -1/2 Barra Mantequilla a temperatura ambiente (90 g) <br>
                  -3 1/2 Tazas Harina para hot cakes <br>  
                  -2 Cucharadas Polvo para hornear <br>
                  -1/4 Taza Harina de trigo la necesaria para espolvorear <br>
                  -1 Taza Aceite de maíz para freír <br>
                  -1/3 Taza Media Crema NESTLÉ® <br>
                  -1 Barra Chocolate para mesa ABUELITA® (200 g) <br>
                </p>
            </div>
        </div>
   </div>

   <div class="wrapper">
    <div class="container">
        <img class="top" src="<?php bloginfo("template_url");?>/img/muffins-03.jpg" alt="">
        <div class="bottom">
            <div class="left">
                <div class="details">
                    <h2 class="txt_products">Muffins</h2>
                    <p>Con chispas de chocolate</p>
                </div>
                <div class="buy">
                    <a href="#">
                        <i class="fas fa-cart-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="inside">
        <div class="icon">
            <i class="far fa-eye"></i>
        </div>
        <div class="contents">
            <h1>Ingredientes</h1>
            <p>
              -6 Cucharadas de Nestle Chocolatería Chispas <br>
              -1 Taza de Harina<br>
              -1/2 Taza de Azúcar<br>
              -2 Unidade de Huevo<br>
              -3 Cucharadas de Aceite Vegetal<br>
              -1/2 Cucharadita de Esencia de Vainilla<br>
              -1 Cucharadita de Polvo de Hornear<br>
              -3 Cucharadas de Agua Caliente
            </p>
        </div>
    </div>
</div>

<div class="wrapper">
<div class="container">
    <img class="top" src="<?php bloginfo("template_url");?>/img/pastel-02.jpg" alt="">
    <div class="bottom">
        <div class="left">
            <div class="details">
                <h2 class="txt_products">Pastel</h2>
                <p>Tres leches</p>
            </div>
            <div class="buy">
                <a href="#">
                    <i class="fas fa-cart-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="inside">
    <div class="icon">
        <i class="far fa-eye"></i>
    </div>
    <div class="contents">
        <h1>Ingredientes</h1>
        <p>
          -200 gramos de mantequilla <br>
          -5 unidades de huevos<br>
          -1 taza de azúcar (200 gramos)<br>
          -2 tazas de harina (280 gramos)<br>
          -2 cucharadas de postre de polvo para hornear <br>
          -1 taza de leche (240 mililitros)<br><br>

          Para el baño o cubierta de tres leches: <br><br>
          -1 lata de leche clavel (evaporada)<br>
          -1 lata de leche condensada<br>
          -1 lata de media crema néstle<br>
          -¼ taza de brandy<br>
          -¼ taza de leche (60 mililitros)
        </p>
    </div>
</div>
</div>

<div class="wrapper">
<div class="container">
    <img class="top" src="<?php bloginfo("template_url");?>/img/muffins-01.jpg" alt="">
    <div class="bottom">
        <div class="left">
            <div class="details">
                <h2 class="txt_products">Muffins</h2>
                <p>Con chocolate</p>
            </div>
            <div class="buy">
                <a href="#">
                    <i class="fas fa-cart-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="inside">
    <div class="icon">
        <i class="far fa-eye"></i>
    </div>
    <div class="contents">
        <h1>Ingredientes</h1>
        <p>
          -300 gr. harina de trigo <br>
          -80 gr. cacao puro, sin azúcar<br>
          -1 y ½ cdita. levadura química<br>
          -¼ cdita. sal<br>
          -250 gr. azúcar<br>
          -100 gr. mantequilla <br>
          -250 ml. leche entera <br>
          -El zumo de ½ limón <br>
          -2 huevos <br>
          -150 gr. chocolate 70% cacao
        </p>
    </div>
</div>
</div>
 </div>







 <?php $aprendeacocinar = get_field("aprende_a_cocinar"); ?>

<div class="container">
<div class="row">
  <div class="col-sm-12">
        <h2 id="aprendeacocinar">.</h2>
        <h2 class="cocina"><?php the_field('titulo_aprende'); ?></h2>
      </div>
  <div class="col-sm-6"> 

    <h2 class="comidalatin"><?php echo $aprendeacocinar['titulo']; ?></h2>
    <p class="resumenlatin"><?php echo $aprendeacocinar['texto']; ?>
    <br>
    <a class="boton1" href="<?php echo $aprendeacocinar['boton']; ?>">Ver mas</a></p>


  </div>

  <div class="col-sm-6">

    <p class="latino"><img src="<?php echo $aprendeacocinar['imagen']; ?>" width="100%"></p>

  </div>






  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 id="comidarecomendada">   </h2>
      </div>



      <h2 class="comidarecomendadas"> <?php the_field('comidas_recomendadas'); ?></h2>
      <div class="col-sm-4">
        <div class="botar">

<?php $comida1 = get_field("comida_1"); ?>
        <img class="imgtitulo" src="<?php echo $comida1['imagen']; ?>" width="100%">
        <h2 class="aprendetitulo"><?php echo $comida1['titulo']; ?></h2>
        <p class="resutitulo"><?php echo $comida1['texto']; ?>
        <br>
        <a class="boton1" href="<?php echo $comida1['boton']; ?>">Ver mas</a></p></p>
        </div>
      </div>




<?php $comida2 = get_field("comida_2"); ?>
      <div class="col-sm-4">
        <div class="botar">
        <h2 class="aprendetitulos"><?php echo $comida2['titulo']; ?></h2>
        <p class="resutitulo"><?php echo $comida2['texto']; ?> 
        <br>
        <a class="boton1" href="<?php echo $comida2['boton']; ?>">Ver mas</a></p>
        </p>
        
        <img class="imgtitulos" src="<?php echo $comida2['imagen']; ?>" width="100%">
        </div>
      </div>





<?php $comida3 = get_field("comida_3"); ?>
      <div class="col-sm-4">
        <div class="botar">
        <img class="imgtitulo" src="<?php echo $comida2['imagen']; ?>" width="100%">
        <h2 class="aprendetitulo"><?php echo $comida2['titulo']; ?></h2>
        <p class="resutitulo"><?php echo $comida2['texto']; ?>
        <br><a class="boton1" href="<?php echo $comida2['boton']; ?>">Ver mas</a></p></p>

        
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
    <a class="boton1" href="./reseñas.html">Ver mas</a></p>

  </div>
      <?php get_footer();?>


