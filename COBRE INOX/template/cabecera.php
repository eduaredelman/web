<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda en línea</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="template\cabecera.css"> 
</head>

<body>
<header>
    <a href="primero.php" class="logo">
      <img src="Nueva carpeta/logo1.png" alt="Logo">
    </a>
    <nav>
      <ul>
        <li>
          <a href="#">Nuestras Tiendas</a>
          <div class="store-info">
            <strong>COBRE INOX</strong>
            <div>
              <p>Villa El Triunfo ZN.B.Mz.f Lt.1 – Arequipa</p>
              <p>Lun. – Sab.: 7:30am - 6:00pm</p>
              <p>+51 945809532</p>
            </div>
            <hr>
            <strong>TERMAS SOLARES COBRE INOX</strong>
            <div>
              <p>Asc.via Las Flores Zn.1 Mz.k Lt.2 Av.54</p>
              <p>Lun. – Sab.: 8:30am - 6:00pm</p>
              <p>+51 941965090</p>
            </div>
            <a href="#">Ver todas las tiendas</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="options">
      <a href="#">Habla con un experto</a>
      <i class="fab fa-whatsapp fa-3x"></i>
      <div class="contact-info">
        <h2>ESCRÍBENOS</h2>
        <h1>945809532</h1>
      </div>
      <i class="fas fa-user fa-3x" onclick="showLoginForm()"></i>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-navbar">
    <div class="container">
      <a class="navbar-brand" href="PRECIO,PRODUCTOS.PHP">Para cada necesidad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="primero.php" id="laptopsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="Toggle navigation"">
              Inicio
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="NOSOTROS.PHP" id="pcsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nosotros
            </a>
            <div class="dropdown-menu" aria-labelledby="pcsDropdown">
              <h6 class="dropdown-header">Hogar & Oficina</h6>
              <a class="dropdown-item" href="NOSOTROS.PHP">SACHACA</a>
              <a class="dropdown-item" href="Nosotros.php">CERRO COLORADO</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">EMPRESA</h6>
              <a class="dropdown-item" href="Nosotros.php#INFORMACION">INFORMACION</a>
              <a class="dropdown-item" href="Nosotros.php#INFORMACION">TECNICO INFORMACION</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header"><i>PRODUCTOS</i></h6>
              <a class="dropdown-item" href="PRECIO,PRODUCTOS.PHP">PRECIO</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Línea Empresarial</h6>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="zonaGamerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Termas Solares
            </a>
            <div class="dropdown-menu" aria-labelledby="zonaGamerDropdown">
              <h6 class="dropdown-header">TANQUES</h6>
              <a class="dropdown-item" href="TERMA.PHP#tanques">ACERO INOXIDABLE</a>
              <a class="dropdown-item" href="TERMA.PHP#tanques">ACERO LAC </a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">PANELES</h6>
              <a class="dropdown-item" href="TERMA.PHP#paneles-solares">CON REGILLA DE TUBOS DE COBRE RÍGIDO</a>
              <a class="dropdown-item" href="TERMA.PHP#paneles-solares">TUBOS AL VACIO</a>
              <a class="dropdown-item" href="TERMA.PHP#paneles-solares">MODELO-OMEGA PLUS</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">GALERIA INOX</h6>
              <a class="dropdown-item" href="GALEY.PHP">FOTOS</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="search-cart">
        <input type="text" placeholder="Buscar producto">
        <button><i class="fas fa-search"></i></button>
        <i class="fas fa-shopping-cart fa-2x cart-icon"></i>
      </div>
    </div>
  </nav>

  <div class="login-overlay" onclick="hideLoginForm()"></div>
  <div class="login-container">
    <div class="login-form">
      <form>
        <input type="text" placeholder="Nombre de usuario o correo">
        <br>
        <input type="password" placeholder="Contraseña">
        <br>
        <button type="submit">Log In</button>
      </form>
      <p><input type="checkbox"> Remember me</p>
      <p>No account yet? <a href="#">CREATE AN ACCOUNT</a></p>
    </div>
  </div>
  </body>
  <script>
  window.onscroll = function() {stickyNavbar()};

  var navbar = document.querySelector('.navbar');
  var sticky = navbar.offsetTop;

  function stickyNavbar() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add('fixed-top');
    } else {
      navbar.classList.remove('fixed-top');
    }
  }
</script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>

