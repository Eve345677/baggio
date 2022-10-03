<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Elite</title>
  <!-- Tipografia -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Logos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/layout.css">

<link rel="stylesheet" href="css/carrusel.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
var current = 0;
var imagenes = new Array();

$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
	 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
      
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    }); 
 });
</script>
</head>

<body>
  <?php require_once "vistas/layout.php"; ?>

  <!-- SHOWCASE -->
  <div class="container">
  
    
  <div class="row">
      <div id="content" class="col-lg-12">
          <div id="carrusel">
              <a href="#" class="left-arrow"><img src="img/left-arrow.png" /></a>
              <a href="#" class="right-arrow"><img src="img/right-arrow.png" /></a>
              <div class="carrusel">
                  <div class="product1"  style="width:1425px;   height: 400px;" id="product_0">
                  <h2>Registro nuevos usuarios.</h2> <p>Aquí te damos un espacio para que puedas registrarte con un usuario y empezar a formar parte de la comunidad de ésta página.</p> 
                  <a href="Register.php" class="btn">Registrate.<i class="fas fa-chevron-right"></i></a>
                  </div>
                  <div class="product2" style="width:1425px; height: 400px; " id="product_1">
                     
                  <h2>Login para usuarios ya registrados.</h2> <p>¿Ya tienes cuenta? Logueate aquí y vuelve a tu usuario.</p>
                  <a href="login.php" class="btn">Iniciar sesion.<i class="fas fa-chevron-right"></i></a>
                  </div>
                  <div class="product3" style="width:1425px; height: 400px; " id="product_2">
                     
                  <h2>Inscribete en las Fuerzas Armadas.</h2> <p>¿Estás interesado en inscribirte en las FF.AA.? ¡Haz click aquí!</p>
                   <a href="inscripciones.php" class="btn" target="_blank">Inscripciones.<i class="fas fa-chevron-right"></i></a>
                  </div>
                  <div class="product4" style="width:1425px;height: 400px;" id="product_3">
                     
                     
                  </div>
                
              </div>
          </div>
      </div>
  </div>
  
 
      
  </div>
 

  <!-- NEWS CARDS -->
  <br>
  <div class="row">
    <h2 class="negro" id="negro">Noticias</h2>
  </div>
  <div class="news-cards" align="justify">
    <div>
      <img src="img/IMG_Notica1.jpg" alt="" />
      <h5>29 de julio de 2022.</h5>
      <h3>El ministro Taiana firmó convenio de colaboración y asistencia técnica con la gobernadora Alicia Kirchner.</h3>
      <p>
        El ministro de Defensa, Jorge Taiana, y la gobernadora de Santa Cruz, Alicia Kirchner, rubricaron esta tarde un convenio marco para formalizar la colaboración y asistencia técnica, de forma recíproca, en cuestiones inherentes a sus respectivas competencias.
      </p>
      <a href="https://www.argentina.gob.ar/noticias/el-ministro-taiana-firmo-convenio-de-colaboracion-y-asistencia-tecnica-con-la-gobernadora" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia2.jpg" alt="" />
      <h5>28 de julio de 2022.</h5>
      <h3>En Brasilia, tras el cierre de la XV CMDA: Argentina fue elegida para presidir la XVI Conferencia de Mi...</h3>
      <p>
        En el acto de clausura de la XV Conferencia de Ministros de Defensa de las Américas que se llevó a cabo en Brasilia entre el 25 y el 28 de julio, la República Argentina fue elegida por los Estados Miembro como Secretaria pro tempore de la XVI CMDA para el bienio 2023-2024.
      </p>
      <a href="https://www.argentina.gob.ar/noticias/en-brasilia-tras-el-cierre-de-la-xv-cmda-argentina-fue-elegida-para-presidir-la-xvi" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia3.jpg" alt="" />
      <h5>27 de julio de 2022.</h5>
      <h3>En Brasilia: En la Conferencia de Ministros de Defensa de las Américas, Cafiero mantuvo reunio...</h3>
      <p>
        En el marco de la XV Conferencia de Ministros de Defensa de las Américas, que se desarrolla en Brasilia, el secretario de Asuntos Internacionales para la Defensa, Francisco Cafiero, en representación del Ministerio de Defensa argentino, mantuvo hoy distintas reuniones bi...
      </p>
      <a href="https://www.argentina.gob.ar/noticias/en-brasilia-en-la-conferencia-de-ministros-de-defensa-de-las-americas-cafiero-mantuvo" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia4.jpg" alt="" />
      <h5>26 de julio de 2022</h5>
      <h3>Argentina participa de la XV Conferencia de Ministros de Defensa de las Américas.</h3>
      <p>
        Con la presencia del secretario de Asuntos Internacionales para la Defensa, Francisco Cafiero, el Ministerio de Defensa participa de la XV Conferencia de Ministros de Defensa de las Américas (CMDA), que este año se realiza en la República Federativa del Brasil y reúne a todas...
      </p>
      <a href="https://www.argentina.gob.ar/noticias/argentina-participa-de-la-xv-conferencia-de-ministros-de-defensa-de-las-americas" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>

  <!-- Card Banner 1
    <section class="cards-banner-one">
      <div class="content">
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat maxime facilis quasi alias illo, fugiat
          cupiditate porro dolores tenetur delectus!</p>
        <a href="#" class="btn">Learn More<i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
  -->

  <!-- NEWS CARDS -->
  <br>
  <div class="row">
    <h2 class="negro" id="negro">Noticias destacadas</h2>
  </div>
  <div class="news-cards">
    <div>
      <img src="img/IMG_Noticia-destacada1.jpg" alt="" />
      <h5>2 de agosto de 2022.</h5>
      <h3>Se entregaron colecciones literarias a los liceos militares y colegios dependientes de las FFAA.</h3>
      <p>
        En el marco del programa “Libros para Aprender”, el Ministerio de Defensa junto al Ministerio de Educación de la Nación, hicieron entrega de un total de 26 colecciones literarias destinadas a los tres niveles de educación Inicial, Primario y Secundario; y a los liceos militares.
      </p>
      <a href="https://www.argentina.gob.ar/noticias/se-entregaron-colecciones-literarias-los-liceos-militares-y-colegios-dependientes-de-las" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia-destacada2.jpg" alt="" />
      <h5>2 de agosto de 2022.</h5>
      <h3>El Ministerio de Defensa ratifica la protección de la Reserva Natural de la Defensa Uspallata.</h3>
      <p>
        El Ministerio de Defensa, a cargo de Jorge Taiana, ratifica el trabajo en conjunto con la Administración de Parques Nacionales que se desarrolla en la Reserva Natural de la Defensa (RND) Uspallata (Mendoza), que integra junto a otras 13 el sistema de reservas en...
      </p>
      <a href="https://www.argentina.gob.ar/noticias/el-ministerio-de-defensa-ratifica-la-proteccion-de-la-reserva-natural-de-la-defensa" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia-destacada3.jpg" alt="" />
      <h5>28 de julio de 2022.</h5>
      <h3>         El Ministerio de Defensa presentó sus capacidades navales en el marco de la iniciativa interministerial...</h3>
      <p>
        El Ministerio de Defensa informa que, con motivo de las celebraciones del Día de los Intereses Argentinos en el Mar, el miércoles la Secretaría de Investigación, Política Industrial y Producción para la Defensa dio a conocer las capacidades y principales proyectos del Astillero Naval...
      </p>
      <a href="https://www.argentina.gob.ar/noticias/el-ministerio-de-defensa-presento-sus-capacidades-navales-en-el-marco-de-la-iniciativa" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div>
      <img src="img/IMG_Noticia-destacada4.jpg" alt="" />
      <h5>25 de julio de 2022.</h5>
      <h3>Se completó la entrega de los 54 camiones Mercedes Benz adquiridos con financiamiento del FONDEF...</h3>
      <p>
        El Ministerio de Defensa, a cargo de Jorge Taiana, informa que la Dirección de Arsenales del Ejército Argentino recibió hoy los últimos 14 camiones 4x4, adquiridos con aportes del Fondo Nacional de la Defensa (FONDEF). Con la llegada de esos vehículos, son 54 unidades las...
      </p>
      <a href="https://www.argentina.gob.ar/noticias/se-completo-la-entrega-de-los-54-camiones-mercedes-benz-adquiridos-con-financiamiento-del" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
</body>

</html>