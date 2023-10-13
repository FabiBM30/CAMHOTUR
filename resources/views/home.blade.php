@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<title>Home</title>
<style> 
  Body div .main-home h1 {
    text-align: center;
    font-family: "Poppins", sans-serif;
  }
  body div p {
    font-family: "Poppins", sans-serif;
    font-size: 1.2rem;
  }
  body div .descrip {
    font-family: "Poppins", sans-serif;
    font-size: 1.5rem;
    text-align: center;
  }
--------------------------------------
article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -10px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}
.container h1:last-child {
  margin-bottom: 0;
}
article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-family: "Poppins", sans-serif;
  font-size: 1.2rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
  
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/******** 
Generic layout (demo looks)
**********/

*,
*::before,
*::after {
  box-sizing: border-box;
}

.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}
.encargados {
  max-width: 600px;
  margin: 0 auto; /* Establece el margen izquierdo y derecho a "auto" para centrar horizontalmente */
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}

/* Añade otros estilos necesarios */



@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 5fr;
    gap: 26px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
.shield-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.shield-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}


.logo-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.logo-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}

.logo-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.logo-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}



.container {
  text-align: center;
  margin-bottom: 20px; /* Margen inferior para separar el texto del borde */
}

/* Estilos para pantallas mayores a 380px */
@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}
/*ENCARGADOS */
 /* Agrega aquí tus estilos CSS */
 @media screen and (max-width: 600px) {
  /* Estilos para pantallas con un ancho máximo de 600px */
  .section .encargados {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100%; /* Cambia "fit-content" por "100%" */
  }
  .article-wrapper {
    margin-bottom: 20px;
  }
}

.encargado-figure {
  width: 150px;
  height: 150px;
  margin: 0 auto;
  overflow: hidden;
  display: flex; /* Agrega esta línea para usar flexbox */
  justify-content: center; /* Centra horizontalmente */
  align-items: center; /* Centra verticalmente */
}

.encargado-figure img {
  width: 100%;
  height: auto;
  justify-content: center;
}
/* Estilos personalizados para el carrusel */
.carousel {
  display: flex;
  overflow: hidden;
  width: 100%;
  margin-top: -24px;
  justify-content: center; /* Centra horizontalmente las imágenes */
  align-items: center; /* Centra verticalmente las imágenes */
}

.carousel-item {
  flex-shrink: 0;
  width: 100%;
  transition: transform 0.4s ease-in-out;
  display: flex;
  justify-content: center; /* Centra horizontalmente las imágenes */

}

.carousel-item:not(.active) {
  opacity: 0;
  transform: translateX(100%);
}

.carousel-item.active {
  opacity: 1;
  transform: translateX(0);
}

.carousel-controls {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.carousel-controls button {
  background: none;
  border: none;
  cursor: pointer;
  margin: 0 5px;
  font-size: 20px;
}

.carousel-controls button:focus {
  outline: none;
}

.carousel-controls button:hover {
  color: #28666e;
}
.carousel-item img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain; /* Ajusta el tamaño de las imágenes manteniendo su relación de aspecto */
}

@media screen and (max-width: 600px) {
  .carousel-item img {
    width: auto; /* Restablece el ancho de las imágenes en pantallas pequeñas */
    height: 100%;
  }
}
.carousel {
  display: flex;
  overflow: hidden;
  width: 100%;
  margin-top: -24px;

  justify-content: center; /* Centra horizontalmente las imágenes */
  align-items: center; /* Centra verticalmente las imágenes */
}

</style>
</head> 
<body>
<div class="main-home">
    <!-- Carrusel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="justify-content: center;">
    <img src="{{ asset('images') }}" alt="Slide 1">
    </div>
    <div class="carousel-item" style="justify-content: center; width" >
      <img src={{ asset('images')}} alt="Slide 2">
    </div>
    <div class="carousel-item" style="justify-content: center;">
      <img src={{ asset('images')}} alt="Slide 3">
    </div> 
    <div class="carousel-item" style="justify-content: center;">
      <img src={{ asset('images')}} alt="Slide 4">
    </div> 
    <!-- Agrega más elementos carousel-item según tus necesidades -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<br>
<br>
</section>
<!-- QUE ES CAMHOTUR -->
<section class="container">
<h1 class="text-center"><strong>Qué es CAMHOTUR</strong></h1>
<p>Descripcion General.</p>
</section>
<br>
<br>
<br>
<br>
  <!-- Misión, Visión y Valores -->
  <title>Misión, Visión y Valores</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center"><strong>Misión, Visión y Valores</strong></h1>
<br>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="line-height: 2.5;">
            <h2 class="card-title">Misión</h2>
            <p class="card-text">"Ofrecer al viajero nacional e internacional una oferta turística acorde con los estándares de calidad, 
              sostenibilidad, ambiental, tecnológico y accesibilidad."</p>
          </div>
        </div>
      </div>
      

      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="line-height: 2.5;">
            <h2 class="card-title">Visión</h2>
            <p class="card-text">"Desarrollar la oferta turística y el emprendimiento con el fin de posicionar al cantón de 
              Hojancha como destino turístico a nivel nacional."</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Valores</h2>
            <ul class="list-unstyled">
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">H</span><span style="font-size: 16px;">UMILDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">O</span><span style="font-size: 16px;">PTIMISMO</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">J</span><span style="font-size: 16px;">OVIALIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">A</span><span style="font-size: 16px;">MISTAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">N</span><span style="font-size: 16px;">ATURALEZA</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">C</span><span style="font-size: 16px;">ALIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">H</span><span style="font-size: 16px;">ONESTIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 0px;">A</span><span style="font-size: 16px;">MOR</span>
              </li>
            </ul>
          </div>
          
          
          
        </div>
      </div>
    </div>
  </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<h1 class="container text-center"><strong>Encargados</strong></h1>
  <br>
  <br>
  <section class="encargados">
    <article>
      <div class="article-wrapper" >
        <figure class="encargado-figure">
          <img src="/imgs/pain1.png" alt="" />
        </figure>
        <div class="article-body">
          <h2>Director de CAMHOTUR</h2>
          <p>Ezequiel Aguirre Pérez</p>
        </div>
      </div>
    </article>

    <article>
      <div class="article-wrapper">
        <figure class="encargado-figure">
          <img src="{{ asset('images/Carlos Avila.jpg') }}" alt="" class="img-fluid" />
        </figure>
        <div class="article-body">
          <h2>Asociado a CAMHOTUR</h2>
          <p>Carlos Ávila Mata</p>
        </div>
      </div>
    </article>
    
    
  </section>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="container"
class="text-center" > <strong>Entidades Encargadas</strong></h1>
<br>
<br>
</section>
<section class="container">
  <div style="display: inline-block; margin-right: 20px;">
    <article class="article-wrapper">
      <figure class="logo-figure">
        <img src="{{ asset('images/Sede Regional.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>Universidad Nacional Sede Regional Chorotega</h2>
      </div>
    </article>
  </div>

  <div style="display: inline-block; margin-right: 20px;">
    <article class="article-wrapper">
      <figure class="logo-figure">
        <img src="{{ asset('images/CARRERA.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>Carrera de Ingenieria en Sistemas de Informacion</h2>
      </div>
    </article>
  </div>

  <div style="display: inline-block;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/2.png') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>Cámara Hojancheña de Turismo</h2>
      </div>
    </article>
  </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="container"
class="text-center" > <strong>Desarrolladores</strong></h1>
<br>
<br>

<section class="articles">

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="{{ asset('images/Fabian.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Fabián Esteban Bolaños Morales
        </p>
        
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="{{ asset('images/Gaby.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>FRONT-END y QA</h2>
        <p> Keiry Gabriela Juárez Hernández
        </p>
       
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="{{ asset('images/Solmahr.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Solmahr Jored Leal Rivas
        </p>
       
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="{{ asset('images/Marvin.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Marvin Josue Alvarado López
        </p>
        
      </div>
      <br>
      <br>
      <br>
    </section>
      <!-- Zona Turística Potencial -->
<section class="container">
    <h1 class="text-center"><strong>Zona Turística Potencial</strong></h1>
    <p>Tu contenido sobre la zona turística potencial.</p>
  </section>
  

    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-success"><span class="text-white">CAMH</span>OTUR</h1>
                </a>
              
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Síguenos</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/profile.php?id=100064024153850"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            
           
            <div class="col-lg-3 col-md-6 mb-5 ml-auto">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contáctenos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Hojancha, Guanacaste</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+(506) 8633-6709</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">CAMHOTUR</a>.Nos reservamos todos los derechos.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50"><a href="https://htmlcodex.com"></a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
  </article>
</body>
</html>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
