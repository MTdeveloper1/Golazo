<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilo.css" />
  <link rel="icon" href="./imagenes/logo.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <title>Golazo | Premier League</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light" id="backgroundNav"></nav>

  <div class="sliderContainer">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./imagenes/city.jpg" class="d-block w-100 slideImg" alt="Manchester City">
        </div>
        <div class="carousel-item">
          <img src="./imagenes/licha.png" class="d-block w-100 slideImg" alt="Lisandro Martinez">
        </div>
        <div class="carousel-item">
          <img src="./imagenes/pelea.png" class="d-block w-100 slideImg" alt="Pelea Chelsea Inter">
        </div>
      </div>
      <button class="carousel-control-prev carouselBtn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" id="prev">Previous</span>
      </button>
      <button class="carousel-control-next carouselBtn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" id="next">Next</span>
      </button>
    </div>
    
    <button class="verTabla">Ver Tabla</button>
    <div class="tablaContainer" id="tabla ">
      <img class="tablaImg" src="./imagenes/tablaPremier.png" alt="">
    </div>
</div>

<a href="#inicio" class="arriba">
  <img src="./imagenes/flechaContraer.png" alt="">
</a>

<div class="gContainer">
  <article id="reciente" class="recienteContainer">
    <h2 class="titulos reciente">El city de Guardiola</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/arsenal4.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">U</b>n city que no para. El conjunto de pep esta haciendo una temporada maravillosa y con su gran fichaje de Halland dan miedo.
          Esta vez vencieron a un equipo que no les presento dificultades, el Borenmouth no pudo darle pelea a este gran equipo que con los goles de Gundogan, De Bruyne y Foden 
          lograron una goleada. Los hinchas estan como locos y con el equipo que tienen se estan ilusionando para coronar grandes torneos como la Champions.
          Al terminar el partido se le pregunto a Foden como se sent??a en el club y con Pep, el respondi??: "Es el mejor entrenador que le puede tocar a un jugador". 
          Foden aprend??o mucho de Guardiola quien le tiene un cari??o especial, tanto as?? que dijo que despu??s de Messi es la mejor promesa que vio con sus propios ojos.
          Ahora el City seguir?? luchando para quedarse lo mas solitario que pueda en la punta.
        </p>
        <a href="">Ver m??s</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="city" class="recienteContainer">
    <h2 class="titulos">Baile del City</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/city.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">C</b>ity arranca con el pie derecho, le gan?? 4
          a 0 al Bournemouth Pep domina la premier y lo demuestra siempre. El
          partido termino con casi el 70% de la posesi??n para el City, estaban
          moviendo la pelota continuamente, fu?? hermoso. El marcador lo abri??
          Gundogan a los 19', dos minutos despu??s uno de los mejores jugadores
          de la premier De Bruyne meeti?? el segundo, El tercero fu?? por Foden a
          los 37' y El ??ltimo fue un humillante gol en contra.
        </p>
        <a href="premier.html">Ver m??s</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="atleti" class="recienteContainer">
    <h2 class="titulos">Joao F??lix h??roe</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/atletico.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">E</b>l joven delantero portugu??s pide minutos en el metropolitano.
          En un buen partido de los dirigidos por Simeone se destaco especialmente Joao Felix repartiendo juego y
          asistencia hacia todos sus compa??eros
          el conjunto madrile??o goleo al Getafe por 3-0 con tres asistencias de el ex golden boy Joao Felix.
          El 7 del aleti demuestra su gran nivel a pesar de su corta edad y el como es una figura clave en las victorias
          de los colchoneros.
        </p>
        <a href="">Ver m??s</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="juve" class="recienteContainer">
    <h2 class="titulos">Que debut fideo!!</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="imagenes/juve.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">E</b>l conjunto Bianconeri se destaco este finde semana por la contundente victoria
          frente al Sassuolo el partido se encontraba trabado pero el fideo

          di mar??a necesito unicamente 26 minutos para abrir el marcador con un gran gol de volea el 22 de la Juve
          demuestra q esta preparado para las grandes noches en Turin.

          Luego en el minuto 55 reparti?? una asistencia digna del argentino al numero 9 de la vecchia signora.

          El temido d??o que a futuro le puede generar problemas a todas las defensas italianas
        </p>
        <a href="">Ver m??s</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="boca" class="recienteContainer">
    <h2 class="titulos">Fue ilegal lo del changuito?</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/boca.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">L</b>a justicia esta investigando a Milton
          Leyendeker debido a sospechas de que la patada halla sido una apuesta,
          seg??n Diego Monroi quien estuvo al tanto del caso vi?? como luego del
          partido Milton Leyendeker se hab??a ido por separado del grupo. Lo
          sigui?? y vio como se subia a un auto de alta gama y se marchaba como
          copiloto. Van a operar al changuito y va a tener para mucho, si esto
          fue por una apuesta la justicia podr??a poner penas graves para
          Leyendeker. En las pr??ximas horas estaremos dando informaci??n nueva.
        </p>
        <a href="">Ver m??s</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>
</div>

  <footer id="footer"></footer>

  <script src="./elementos/navBar.js"></script>
  <script src="./elementos/footer.js"></script>
  <script src="./tabla.js"></script>
</body>

</html>