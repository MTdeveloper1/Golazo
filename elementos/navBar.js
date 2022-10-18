let navContainer = document.getElementById('backgroundNav')

navContainer.innerHTML=`
<div class="container-fluid" id="inicio">
<a class="navbar-brand" id="logo" href="index.html"><img id="logoImg" src="./imagenes/logo.png" alt="" /></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/menu--v1.jpg" />
</button>
<div class="navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <a class="nav-link" id="cambios" aria-current="page" href="index.html">Inicio</a>
    <a class="nav-link" id="cambios" href="premier.html">Premier League</a>
    <a class="nav-link" id="cambios" href="#">La liga</a>
    <a class="nav-link" id="cambios" href="#">Ligue one</a>
    <a class="nav-link" id="cambios" href="#">Serie A</a>
    <a class="nav-link" id="cambios" href="predicciones.html">Fichajes</a>
  </div>
  <div class="heiContainer">
    <a id="cambios" href="https://www.heineken.com"><img class="heini" src="./imagenes/heineken.png" alt=""></a>
    <a id="cambios" href="https://www.adidas.com"><img class="adidas" src="./imagenes/adidas.png" alt=""></a>
  </div>
</div>
</div>
`