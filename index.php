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
  <title>Golazo</title>
</head>

<body>

  <div id="contenedorCarga">
    <div id="carga">
      <img src="/imagenes/logo.png" alt="">
      <span class="loader"></span>
    </div>
  </div>

  <a href="#inicio" class="arriba">
    <img src="./imagenes/flechaContraer.png" alt="">
  </a>

  <nav class="navbar navbar-expand-lg bg-light" id="backgroundNav"></nav>
  

  <div class="destacado">
    <h3 class="destacadoTitle title">Lo más destacado</h3>
  </div>
  <div class="portadaContainer">
    <div class="imagenesContainer">
      <div class="messiCont">
        <a href="#reciente"><img class="" src="./imagenes/messi.jpg" alt="" /></a>
      </div>
      <div class="duoContainer">
        <h3>Ultimas noticias</h3>
        <div class="lineaPortada"></div>
        <div class="duoImagenes">
          <div class="marcoFoto">
            <a href="#juve"><img class="imagenDestacado zoom" src="./imagenes/real.png" alt="" /></a>
          </div>
          <div class="marcoFoto">
            <a href="#city"><img class="imagenDestacado zoom" src="./imagenes/city.jpg" alt="" /></a>
          </div>
        </div>
        <div class="duoImagenes">
          <div class="marcoFoto">
            <a href="#atleti"><img class="imagenDestacado zoom" src="./imagenes/atletico.jpg" alt="" /></a>
          </div>
          <div class="marcoFoto">
            <a href="#boca"><img class="imagenDestacado zoom" src="./imagenes/cucu1.png" alt="" /></a>
          </div>
        </div>
        <div class="tellerInicio">
          <p class="title">Suscribite a nuestro Newsteller</p>
          <form action="">
            <input class="inputInicio" placeholder="leomessi@gmail.com" type="email">
            <button type="submit">Suscribirme</button>
          </form>
        </div>
      </div>
    </div>
  </div>


<div class="gContainer">
  <article id="reciente" class="recienteContainer">
    <h2 class="titulos reciente">Mas reciente</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/messiPateando.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">E</b>l equipo de Messi continua ganando, esta
          vez goleó al Nantes. Los goles fueron de Messi primero a los 22',
          luego cuando estaba terminando el primer tiempo Neymar es quien pone
          el marcador 2 a 0, después Sergio Ramos es quien pone el partido 3 a 0
          y termina el partido con un gol de penal que tomo Neymar. El penal fue
          ocasionado por Casttelleto, jugador que nadie conoce pero pego un
          patadón y se llevó la roja. La pulga esta imparable que se agarren las
          patas en Qatar...
        </p>
        <a href="">Ver más</a>
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
          <b class="letraGrande">C</b>ity arranca con el pie derecho, le ganó 4
          a 0 al Bournemouth Pep domina la premier y lo demuestra siempre. El
          partido termino con casi el 70% de la posesión para el City, estaban
          moviendo la pelota continuamente, fué hermoso. El marcador lo abrió
          Gundogan a los 19', dos minutos después uno de los mejores jugadores
          de la premier De Bruyne meetió el segundo, El tercero fué por Foden a
          los 37' y El último fue un humillante gol en contra.
        </p>
        <a href="premier.html">Ver más</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="atleti" class="recienteContainer">
    <h2 class="titulos">Joao Félix héroe</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/atletico.jpg" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">E</b>l joven delantero portugués pide minutos en el metropolitano.
          En un buen partido de los dirigidos por Simeone se destaco especialmente Joao Felix repartiendo juego y
          asistencia hacia todos sus compañeros
          el conjunto madrileño goleo al Getafe por 3-0 con tres asistencias de el ex golden boy Joao Felix.
          El 7 del aleti demuestra su gran nivel a pesar de su corta edad y el como es una figura clave en las victorias
          de los colchoneros.
        </p>
        <a href="">Ver más</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="juve" class="recienteContainer">
    <h2 class="titulos">El lateral mas caro de la historia</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="imagenes/cucu1.png" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">E</b>l conjunto Bianconeri se destaco este finde semana por la contundente victoria
          frente al Sassuolo el partido se encontraba trabado pero el fideo

          di maría necesito unicamente 26 minutos para abrir el marcador con un gran gol de volea el 22 de la Juve
          demuestra q esta preparado para las grandes noches en Turin.

          Luego en el minuto 55 repartió una asistencia digna del argentino al numero 9 de la vecchia signora.

          El temido dúo que a futuro le puede generar problemas a todas las defensas italianas
        </p>
        <a href="">Ver más</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>

  <article id="boca" class="recienteContainer">
    <h2 class="titulos">Gran noche del real en champions</h2>
    <div class="contenedorArticulo">
      <img class="imagenArticulo" src="./imagenes/real.png" alt="" />
      <div class="infoContainer">
        <p class="pContainer">
          <b class="letraGrande">L</b>a justicia esta investigando a Milton
          Leyendeker debido a sospechas de que la patada halla sido una apuesta,
          según Diego Monroi quien estuvo al tanto del caso vió como luego del
          partido Milton Leyendeker se había ido por separado del grupo. Lo
          siguió y vio como se subia a un auto de alta gama y se marchaba como
          copiloto. Van a operar al changuito y va a tener para mucho, si esto
          fue por una apuesta la justicia podría poner penas graves para
          Leyendeker. En las próximas horas estaremos dando información nueva.
        </p>
        <a href="">Ver más</a>
      </div>
    </div>
    <aside>Publicidad</aside>
  </article>
</div>

  <footer id="footer"></footer>

  <script>

      var contenedor = document.getElementById('contenedorCarga')
      let interval;
      interval=setInterval(() => {
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
      }, 1500)

  </script>
  <script src="./elementos/navBar.js"></script>
  <script src="./elementos/footer.js"></script>
</body>

</html>