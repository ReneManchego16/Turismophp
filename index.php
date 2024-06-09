<!DOCTYPE html>
<html>
  <head>
    <title>PeruConect</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <!-- Video de fondo -->
    <video id="background-video" autoplay loop muted>
      <source src="resources/videos/video.mp4" type="video/mp4">
    </video>

    <!-- Contenedor principal -->
    <div class="container">
      <header>
        <h1>LO MEJOR DE NUESTRO PERÚ</h1>
        <p>Sumérgete a nuestra conocer cada rincón de nuestro país. Interactúa con diferentes culturas, planea un viaje entre amigos con nosotros donde lo principal es tu diversión.</p>
        <br><br>
        <a href="vista/login.php">
          <button id="login-button">Iniciar Sesión</button>
        </a>
      </header>
      <br>

      <!-- Formulario de búsqueda 
      <div class="search-form">
        <form action="/search" method="get">
          <div class="form-group">
            <label for="location">Ubicación</label>
            <input id="location" type="text" name="location" placeholder="Buscar el destino">
          </div>
          <div class="form-group">
            <label for="guests">Cantidad viajeros</label>
            <input id="guests" type="number" name="guests" placeholder="Cantidad de Viajeros">
          </div>
          <div class="form-group">
            <label for="date">Fecha</label>
            <input id="date" type="date" name="date">
          </div>
          <button type="submit">Buscar</button>
        </form>
      </div>-->
        <br><br>
      <!-- Nueva sección: Explora Ciudades Populares -->
      <div class="popular-cities">
        <h2>Explora Ciudades Populares</h2>
        <p>Con nuestra IA entrenada te mostramos los mejores lugares más recomendados por los turistas y locales.</p>
        <!-- Lista de ciudades -->
        <div class="city-buttons">
          <button>Arequipa</button>
          <button>Moquegua</button>
          <button>Tacna</button>
          <button>Cajamarca</button>
          <button>Cuzco</button>
          <button>Piura</button>
          <button>Tarapoto</button>
          <button>Ica</button>
        </div>
        <!-- Información de la ciudad -->
        <div class="city-info">
          <img src="resources/images/tacna.jpg" alt="Tacna">
          <div class="city-description">
            <h3>TACNA</h3>
            <p>Conocida como La ciudad heroica, no solo enamora por su belleza paisajística, sino por el patriotismo que se respira en sus calles. Tacna alberga monumentos históricos, pinturas rupestres, petroglifos, deslumbrantes playas, aguas termales y una deliciosa y variada gastronomía.</p>
            <div class="tags">
              <span class="tag">Transporte público</span>
              <span class="tag">Naturaleza y Aventura</span>
              <span class="tag">Transporte privado</span>
              <span class="tag">Agencia Turismo</span>
              <span class="tag">Ubicación</span>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        // Script para reproducir el video
        $(document).ready(function(){
          $("#play-video").click(function(){
            var video = $("#background-video").get(0);
            video.play();
          });
        });
      </script>

      <!-- Sección de "cards" -->
      <div class="cards">
        <div class="card">
          <img src="resources/images/tacna1.jpg" alt="Tacna: Puente colgante de Miculla">
          <div class="card-content">
            <h3>Tacna: Puente colgante de Miculla</h3>
            <p>Duración 1 hora</p>
            <p>Fácil Transporte</p>
            <p>Plan Familiar</p>
            <p class="rating">★★★★☆ 584 reviews</p>
            <p class="price">FREE per person</p>
          </div>
        </div>
        <div class="card">
          <img src="resources/images/tacna2.jpg" alt="Tacna: Campos de Tarata">
          <div class="card-content">
            <h3>Tacna: Campos de Tarata</h3>
            <p>Duración 1 hora</p>
            <p>Fácil Transporte</p>
            <p>Plan Familiar</p>
            <p class="rating">★★★★☆ 584 reviews</p>
            <p class="price">$3.00 per person</p>
          </div>
        </div>
        <div class="card">
          <img src="resources/images/tacna3.jpg" alt="Tacna: Humedales de Ite">
          <div class="card-content">
            <h3>Tacna: Humedales de Ite</h3>
            <p>Duración 2 horas</p>
            <p>Fácil Transporte</p>
            <p>Plan Familiar</p>
            <p class="rating">★★★★☆ 584 reviews</p>
            <p class="price">$4.00 per person</p>
          </div>
        </div>
        <div class="card">
          <img src="resources/images/tacna4.jpg" alt="Tacna: Geyser de Candarave 'Ojo de Ángel'">
          <div class="card-content">
            <h3>Tacna: Geyser de Candarave 'Ojo de Ángel'</h3>
            <p>Duración 2 horas</p>
            <p>Fácil Transporte</p>
            <p>Plan Aventura</p>
            <p class="rating">★★★★☆ 584 reviews</p>
            <p class="price">$6.00 per person</p>
          </div>
        </div>
      </div>

      <!-- Contenedor de la imagen de fondo e información -->
      <div class="info-container">
        <div class="info-background"></div>
        <div class="info-content">
          <img src="resources/images/arequipa.jpeg" alt="Catedral de Arequipa">
          <div class="info-text">
            <h2>Catedral de Arequipa</h2>
            <p>Arequipa lo tiene todo. Sí, absolutamente todo lo que puedas imaginar, lo encuentras en el territorio de la 'Ciudad Blanca'. Historia, aventura, paisajes fabulosos, vida silvestre, gastronomía, arte y mucho más se esconde en la Villa de Nuestra Señora de la Asunta de Arequipa.</p>
            <div class="tags">
              <span class="tag">Trending Now</span>
            </div>
            <p>4.9 (300 reviews)</p>
            <a href="https://www.peru.travel/es/destinos/arequipa">
          <button id="login-button">Conocer</button>
        </a>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        // Script para reproducir el video
        $(document).ready(function(){
          $("#play-video").click(function(){
            var video = $("#background-video").get(0);
            video.play();
          });
        });
      </script>
      <center>
      <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                      name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="resources/images/img7.jpg">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="resources/images/img8.jpg">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="resources/images/img9.jpg">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <center>


      <!-- Destinos destacados -->
      <div class="container mt-5">
        <h2 class="text-center">Destinos Destacados</h2>
        <p class="text-center">A continuación nuestra IA te mostrará los destinos más visitados y recomendados por nuestros viajeros en este mes.</p>
        <div id="destinosCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-2">
                  <div class="card">
                    <img class="card-img-top" src="resources/images/img7.jpg" alt="ANCASH">
                    <div class="card-content">
                      <h5 >ANCASH</h5>
                      <p >Duración 8 horas</p>
                      <p >Precio $35.00</p>
                      <a class="btn btn-primary" href="https://www.peru.travel/es/destinos/ancash">Ver más</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="card">
                    <img class="card-img-top" src="resources/images/img8.jpg" alt="LIMA">
                    <div class="card-content">
                      <h5 class="card-title">LIMA</h5>
                      <p class="card-text">Duración 1 hora</p>
                      <p class="card-text">Precio $35.00</p>
                      <a class="btn btn-primary" href="https://www.peru.travel/es/destinos/lima">Ver más</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="card">
                    <img class="card-img-top" src="resources/images/img9.jpg" alt="MOQUEGUA">
                    <div class="card-content">
                      <h5 class="card-title">MOQUEGUA</h5>
                      <p class="card-text">Duración 10 horas</p>
                      <p class="card-text">Precio $35.00</p>
                      <a class="btn btn-primary" href="https://www.peru.travel/es/destinos/moquegua">Ver más</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="card">
                    <img class="card-img-top" src="resources/images/img10.jpg" alt="SAN MARTIN">
                    <div class="card-content">
                      <h5 class="card-title">SAN MARTIN</h5>
                      <p class="card-text">Duración 5 horas</p>
                      <p class="card-text">Precio $35.00</p>
                      <a class="btn btn-primary" href="https://www.peru.travel/es/destinos/san-martin">Ver más</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="card">
                    <img class="card-img-top" src="resources/images/img4.jpg" alt="ICA">
                    <div class="card-content">
                      <h5 class="card-title">ICA</h5>
                      <p class="card-text">Duración 4 horas</p>
                      <p class="card-text">Precio $35.00</p>
                      <a class="btn btn-primary" href="https://www.peru.travel/es/destinos/ica">Ver más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Chatbot de Perú Connect -->
      <div class="container info-container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://robo.deals/img/core-img/robodeals-logo.png" alt="ChatBot" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h3>PeruConect ChatBot</h3>
            <p>Disponible las 24h del día</p>
            <p>Presentamos a ConectBot, un chatbot especializado con IA que te brindará toda la información que necesites para planear un viaje por el Perú o conocer los restaurantes más descatados</p>
            <button>Ciudades</button>
            <br>
            <button>Restaurantes</button>
          </div>
        </div>
      </div>

      <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
      <df-messenger intent="WELCOME" chat-title="botperu" agent-id="c20b1b20-a403-4bef-b363-c7b61c718b84" language-code="es"></df-messenger>
  </body>
</html>
