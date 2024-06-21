<!-- Barra de navegación -->
<div class="hover" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?php echo base_url("Principal"); ?>>
      <img src="assets/img/logoNav.jpg" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
<style>
        /* Ajusta el tamaño del logo */
        .navbar-brand img {
            height: 40px; /* Ajusta la altura del logo */
            width: auto; /* Mantiene la proporción del logo */
        }
        .hover:hover{
            background-color: #f8f9fa;
        }
    </style>

<!-- Fin Barra de navegación -->