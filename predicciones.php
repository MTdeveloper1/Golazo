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
  <title>Golazo | Fichajes</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light" id="backgroundNav"></nav>
    <section class="transpasosInicio">
      <div class="contenedorTxt">
        <h3>Intenta predecir los fichajes</h3>
        <p>Vos junto a la comunidad podés interactuar y dar tu opinion acerca de que fichaje se va a completar,
           elegí entre cuan probable crees que sea ese fichaje y con nuestra base de datos vamos a determinar que porcentaje
          de la comunidad se asemeja a tu predicción.</p>
      </div>
      <form onsubmit="return=enviarMensaje()" action="" method="post">
            <input name="mail" placeholder="leomessi@gmail.com" type="email">
            <button name="registrarse" type="submit">Registrarme</button>
      </form>
    </section>
<script>
    function evitarRefresh() {
    e.preventDefault();
    return (false);     
    }
</script>
    <section>
      <marquee scrollamount="20">
        <pre>Gabriel Jesus => Arsenal          Jose bonifacio => Newcastle          Rahim Sterling => Chelsea          Kylian Mbappe => Real Madrid          Romelu Lukaku => Boca Juniors          Gonzalo Higuain => Riber Plate          Esteban Rolon => Bayern Munich</pre>
      </marquee>


      <!-- CONEXIÓN A BASE DE DATOS -->
      <?php
          function conectarBd($nombreBd) {
            $servername = 'golazo';
            $username = 'root';
            $password = 'manu1234';
            $conexion = mysqli_connect($servername, $username, $password, $nombreBd);
            if($conexion) {
              echo "<h3>Conexión con base de datos exitosa</h3>";
            } else {
              echo "<p>Error de conexión" . mysqli_error() . "</p>";
            }
            return $conexion;
          }
          $nombreBd = 'golazo';
          conectarBd($nombreBd);
        ?>

    <?php
          if(isset($_POST['registrarse'])) {
            $mail = $_POST['mail'];

            $insertarDatos = "INSERT INTO usuarios(usuariosEmail) VALUES('$mail')";

            $ejecutarInsercion = mysqli_query($conexion, $insertarDatos);

            if(!$ejecutarInsercion) {
              echo "Error en la línea de sql";
            }
          }
        ?> 

        <script>
          function insertarPrediccion(int name) {
            
          }
        </script>

<div class="duoFichajes">

<div id="gabriel" class="tarjetaFichajes">
  <div class="arribaTarjeta">
  <p class="nombreFichaje">Gabriel Jesus</p>

  <form action="" method="post">
<div class="transferencia">
    <div onClick="insertarPrediccion()" class="rojo fSelec"><button name="1"></button></div>
    <div onClick="insertarPrediccion()" class="naranja fSelec"><button name="2"></button></div>
    <div onClick="insertarPrediccion()" class="amarillo fSelec"><button name="3"></button></div>
    <div onClick="insertarPrediccion()" class="verdeClaro fSelec"><button name="4"></button></div>
    <div onClick="insertarPrediccion()" class="verdeOscuro fSelec"><button name="5"></button></div>
  </div> 
  </form> 
</div>
</div>

<div id="jose" class="tarjetaFichajes">
  <div class="arribaTarjeta">
  <p class="nombreFichaje">Jose bonifacio</p>
    <form action="" method="post">
<div class="transferencia">
    <div onClick="insertarPrediccion()" class="rojo fSelec"><button name="1"></button></div>
    <div onClick="insertarPrediccion()" class="naranja fSelec"><button name="2"></button></div>
    <div onClick="insertarPrediccion()" class="amarillo fSelec"><button name="3"></button></div>
    <div onClick="insertarPrediccion()" class="verdeClaro fSelec"><button name="4"></button></div>
    <div onClick="insertarPrediccion()" class="verdeOscuro fSelec"><button name="5"></button></div>
</div> 
  </form> 
</div>
</div>


</div>

    </section>

  <footer id="footer"></footer>

  <script src="./elementos/navBar.js"></script>
  <script src="./elementos/footer.js"></script>
</body>

</html>