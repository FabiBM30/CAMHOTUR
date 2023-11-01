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


/* ESTILOS COLLAGE */
.collage {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .collage img {
            max-width: 100%;
            height: auto;
            position: relative;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
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
    <!DOCTYPE html>

    <html>

<head>
    <!-- Agrega tus enlaces a CSS si los tienes -->
    <style>
        .main-banner {
            background: #ffffff;
            padding: 40px 0;
        }

        .left-content,
        .right-content {
            text-align: center;
            padding: 20px;
        }

        .thumb {
            position: relative;
            overflow: hidden;
        }

        .thumb img {
            width: 100%;
            height: 100%; /* Cambia el valor de 'auto' a '100%' para hacer las imágenes más grandes */
            display: block;
        }

        .inner-content {
            background: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .inner-content h4 {
            font-size: 24px;
            margin: 0;
        }

        .inner-content span {
            color: #007BFF;
            font-size: 16px;
            display: block;
        }

        .main-border-button {
            margin-top: 20px;
        }

        .main-border-button a {
            display: inline-block;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .main-border-button a:hover {
            background: #0056b3;
        }

        .right-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    </style>
</head>



<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
      .main-banner {
          background: #f0f0f0;
      }
      .thumb-container {
          width: 100%;
          max-height: 510px; /* Aumenta la altura máxima del contenedor de la imagen izquierda */
          position: relative;
          overflow: hidden;
      }
      .thumb img {
          width: 120%;
          height: 100%;
          object-fit: cover;
      }
      .inner-content {
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          background: rgba(0, 0, 0, 0.5);
          color: white;
          text-align: center;
          padding: 5px;
          transform: translateY(100%);
          transition: transform 0.3s;
      }
      .thumb:hover .inner-content {
          transform: translateY(0);
      }
      .inner-content h4 {
          font-size: 18px;
          margin: 0;
      }
      .main-border-button {
          margin-top: 10px;
          text-align: center;
      }
      .main-border-button a {
          color: white;
          text-decoration: none;
          border: 1px solid white;
          padding: 5px 10px;
          display: inline-block;
      }
      .main-border-button a:hover {
          background: white;
          color: #000;
      }
  </style>
</head>
<body>
  <div class="main-banner" id="top">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <div class="left-content">
                      <div class="thumb-container">
                          <div class="thumb">
                              <img src="{{ asset('images/HojanchaNueva.jpg') }}" alt="Hojancha">
                              <div class="inner-content">
                                  <h4>Hojancha</h4>
                                  <div class="main-border-button">
                                      <a href="/entrepreneur">Acerca de</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="right-content">
                      <div class="right-grid">
                          <div class="thumb-container">
                              <div class="thumb">
                                  <img src="{{ asset('images/PuertoCarrilloNueva.png') }}" alt="Puerto Carrillo">
                                  <div class="inner-content">
                                      <h4>Puerto Carrillo</h4>
                                      <div class="main-border-button">
                                          <a href="/entrepreneur">Acerca de</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="thumb-container">
                              <div class="thumb">
                                  <img src="{{ asset('images/MatambuNueva.jpg') }}" alt="Matambu">
                                  <div class="inner-content">
                                      <h4>Matambu</h4>
                                      <div class="main-border-button">
                                          <a href="/entrepreneur">Acerca de</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="thumb-container">
                              <div class="thumb">
                                  <img src="{{ asset('images/HuacasNueva.jpg') }}" alt="Huacas">
                                  <div class="inner-content">
                                      <h4>Huacas</h4>
                                      <div class="main-border-button">
                                          <a href="/entrepreneur">Acerca de</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class "thumb-container">
                              <div class="thumb">
                                  <img src="{{ asset('images/MonteRomo2.png') }}" alt="Monte Romo">
                                  <div class="inner-content">
                                      <h4>Monte Romo</h4>
                                      <div class="main-border-button">
                                          <a href="/entrepreneur">Acerca de</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>


  






  
<br>
<br>
<br>
<br>
</section>
<!-- QUE ES CAMHOTUR -->
<section class="container" style="font-family: Arial, sans-serif; line-height: 2;">
  <h1 class="text-center" style="font-size: 26px;"><strong>¿Qué es CAMHOTUR?</strong></h1>
  <br>
  <p style="font-size: 20px;">¡Bienvenido a CAMHOTUR! Somos la Cámara Hojancheña de Turismo, y nuestra misión es ofrecer a los viajeros nacionales e internacionales una experiencia turística excepcional en el hermoso cantón de Hojancha, en la provincia de Guanacaste, Costa Rica. Desde playas paradisíacas y montañas exuberantes hasta una cultura rica y sostenibilidad ambiental, Hojancha tiene todo lo que necesitas para una aventura inolvidable. Explora nuestros destinos, descubre emprendimientos locales, sumérgete en la cultura costarricense y planifica tu viaje con nosotros. ¡Te invitamos a ser parte de esta experiencia única de turismo responsable y auténtico en Hojancha!</p>
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
    <h1 class="text-center" style="font-size: 24px; font-family: Arial;"><strong>Misión, Visión y Valores</strong></h1>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="height: 100%;"> <!-- Añade esta línea -->
          <div class="card-body" style="line-height: 2; border: 5px solid #124b11;">
            <h2 class="card-title" style="font-size: 35px;">Misión</h2>
            <p class="card-text" style="font-size: 20px;">"Ofrecer al viajero nacional e internacional una oferta turística acorde con los estándares de calidad, sostenibilidad, ambiental, tecnológico y accesibilidad."</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-4">
        <div class="card" style="height: 100%;"> <!-- Añade esta línea -->
          <div class="card-body" style="line-height: 2; border: 5px solid #124b11;">
            <h2 class="card-title" style="font-size: 35px;">Visión</h2>
            <p class="card-text" style="font-size: 20px;">"Desarrollar la oferta turística y el emprendimiento con el fin de posicionar al cantón de Hojancha como destino turístico a nivel nacional."</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-4">
        <div class="card" style="height: 100%;"> <!-- Añade esta línea -->
          <div class="card-body" style="border: 5px solid #124b11;">
            <h2 class="card-title" style="font-size: 35px;">Valores</h2>
            <ul class="list-unstyled">
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">H</span><span style="font-size: 16px;">UMILDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">O</span><span style="font-size: 16px;">PTIMISMO</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">J</span><span style="font-size: 16px;">OVIALIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">A</span><span style="font-size: 16px;">MISTAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">N</span><span style="font-size: 16px;">ATURALEZA</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">C</span><span style="font-size: 16px;">ALIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">H</span><span style="font-size: 16px;">ONESTIDAD</span>
              </li>
              <li>
                <span style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">A</span><span style="font-size: 16px;">MOR</span>
              </li>
              <!-- Agrega otros elementos de la lista aquí -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

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
          <img src="{{ asset('images/EzequielAguiree.jpg') }}" alt="" />
        </figure>
        <div class="article-body">
          <h2>Director de CAMHOTUR</h2>
          <p>Ezequiel Aguirre Pérez</p>
        </div>
      </div>
    </article>

    <div style="display: inline-block;">
      <article class="article-wrapper">
        <figure class="encargado-figure">
          <img src="{{ asset('images/CarlosAvila2.webp') }}" alt="" width="20" height="65">
        </figure>
        <div class="article-body">
          <h2>Asociado a CAMHOTUR</h2>
          <p>Carlos Ávila Mata</p>
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
class="text-center" > <strong>Entidades Encargadas</strong></h1>
<br>
<br>
</section>
<section class="container" style="display: table; width: 100%;">
  <div style="display: table-cell; width: 30%; vertical-align: middle;">
    <article class="article-wrapper">
      <figure class="logo-figure" style="position: relative; top: 45px;"> <!-- Ajusta el valor según sea necesario -->
        <img src="{{ asset('images/LOGOS sede.png') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>Universidad Nacional Sede Regional Chorotega</h2>
      </div>
    </article>
  </div>

  <div style="display: table-cell; width: 33.33%; vertical-align: top;">
    <article class "article-wrapper">
      <figure class="logo-figure">
        <img src="{{ asset('images/LOGO IG ROJO.png') }}" alt="" width="200" />
      </figure>
      <div class="article-body">
        <h2>Carrera de Ingeniería en Sistemas de Información</h2>
      </div>
    </article>
  </div>

  <div style="display: table-cell; width: 33.33%;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/logoCam.jpg') }}" alt="" />
      </figure>
      <div class="article-body">
        <h2>Camara Hojancheña de Turismo</h2>
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
  <div style="display: inline-block;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/Fabian.jpg') }}" alt="" width="200">
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Fabián Esteban Bolaños Morales</p>
      </div>
    </article>
  </div>
  
  
  

  <div style="display: inline-block;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/Gaby.jpg') }}" alt="" width="200">
      </figure>
      <div class="article-body">
        <h2>FRONT-END</h2>
        <p> Keiry Gabriela Juárez Hernández</p>
      </div>
    </article>
  </div>
  

  <div style="display: inline-block;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/Jored.jpg') }}" alt="" width="200">
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Solmahr Jored Leal Rivas</p>
      </div>
    </article>
  </div>
  

  <div style="display: inline-block;">
    <article class="article-wrapper">
      <figure class="shield-figure">
        <img src="{{ asset('images/Josue2.jpg') }}" alt="" width="200">
      </figure>
      <div class="article-body">
        <h2>FULL-STACK</h2>
        <p> Marvin Josue Alvarado López</p>
      </div>
    </article>
  </div>
  
</section>
<br>
<br>
<br>
      <!-- Zona Turística Potencial -->
      <section class="container" style="font-family: Arial, sans-serif; line-height: 2;">
        <h1 class="text-center" style="font-size: 26px;"><strong>Zona Turística Potencial</strong></h1>
        <br>
        <p style="font-size: 20px;">El cantón de Hojancha, en Costa Rica, es una potencia turística gracias a su impresionante belleza natural, su enfoque en la sostenibilidad, su rica cultura local, las actividades al aire libre, su comunidad amigable y el turismo rural. Además, es de fácil acceso y ofrece una amplia variedad de opciones para los visitantes.</p>
      </section>
      
  <br>
  <br>
 
  <!-- FOOTER-->
<div class="container-fluid" style="background-color: #001f3f; color: white; padding: 30; margin: 0;">
  <div class="row pt-2">
      <div class="col-lg-3 col-md-6 mb-2">
          <a href="" class="navbar-brand">
              <h1 class="text-info" style="margin-left: 19px;"><span class="text-white">CAMH</span>OTUR</h1>
          </a>

          <h6 class="text-white text-uppercase" style="letter-spacing: 5px; padding: 0 20px;">Síguenos</h6>

          <div class="d-flex justify-content-start">
              <a class="btn btn-outline-primary btn-square border-0" href="https://wa.me/qr/P2ZRVOI4PSCFA1">
                  <img src="{{ asset('images/whatsapp_brand_icon_211850.png') }}" alt="WhatsApp">
              </a>
              <a class "btn btn-outline-primary btn-square border-0" href="https://www.facebook.com/profile.php?id=100008943519205&mibextid=ZbWKwL">
                  <img src="{{ asset('images/Facebook_Square_icon-icons.com_49948.png') }}" alt="Facebook">
              </a>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-2 ml-auto">
          <h5 class="text-white text-uppercase" style="letter-spacing: 2px;">Contáctenos</h5>
          <p style="padding: 0;"><i class="fa fa-map-marker-alt mr-2"></i>Hojancha, Guanacaste</p>
          <p style="padding: 0;"><i class="fa fa-phone-alt mr-2"></i>+(506) 8633-6709</p>
          <p style="padding: 0;"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
      </div>
  </div>
</div>


  </article>
  
</body>


</html>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  