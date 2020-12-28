<html lang="pt-BR">
    <head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
      body {
      background-image: url('https://cdn.hipwallpaper.com/i/32/36/0sbji6.jpg');
      }
      </style>

<nav>
    <div class="nav-wrapper  cyan darken-2">
      <a href="#!" class="brand-logo"><i class="material-icons">pets</i>AnimalCare</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php"><i class="material-icons">home</i></a></li>
        <li><a href="index.php"><i class="material-icons">edit</i></a></li>
        <li><a href="dados.php"><i class="material-icons">search</i></a></li>
        <li><a href="#"><i class="material-icons">map</i></a></li>
      </ul>
    </div>
  </nav>

    </head>

    <body>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        
            <title>Animais de Rua</title>
        </head>
        <body>

        <div class="slider">
        <ul class="slides">
          <li>
            <img src="https://images3.alphacoders.com/493/49327.jpg" > <!-- random image -->
            <div class="caption center-align">
              <h3>Ajude animais de rua</h3>
              <h5 class="light grey-text text-lighten-3">Ajude animais abandonados a encontrar um lar</h5>
            </div>
          </li>
          <li>
            <img src="https://images3.alphacoders.com/884/884424.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Doe seu lar</h3>
              <h5 class="light grey-text text-lighten-3">Adote um pet</h5>
            </div>
          </li>
          <li>
            <img src="https://images4.alphacoders.com/828/8288.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Nos informe sobre animais abandonados</h3>
              <h5 class="light text-lighten-5">Enviaremos ajuda imediatamente</h5>
            </div>
          </li>
          <li>
            <img src="https://images4.alphacoders.com/121/121826.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>Mude a sua vida e a do bichinho!</h3>
              <h5 class="light text-lighten-5">Torne-se apoiador da causa</h5>
            </div>
          </li>
        </ul>
      </div>


      <div class="container">

      <div class="row" >
        <div class="col s6 m4" >
          <div class="card" >
            <div class="card-image">
              <img src="https://i.redd.it/vc8w6tpmctr51.jpg"  height="200">
              <span class="card-title"> Registrar</span>
            </div>
            <div class="card-content">
              <p>Nos informe os dados do animal resgatado</p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn  cyan darken-2" href="index.php">Informar</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4" >
          <div class="card">
            <div class="card-image">
              <img src="https://i.imgur.com/YzABz9Y.jpg"  height="200">
              <span class="card-title">Estatísticas</span>
            </div>
            <div class="card-content">
              <p>Veja o progresso de animais encontrados em cada semana</p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn  cyan darken-2" href="dados.php">Dados</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card" >
            <div class="card-image">
              <img src="https://images4.alphacoders.com/277/277108.jpg"  height="200">
              <span class="card-title">Mapa</span>
            </div>
            <div class="card-content">
              <p>Veja nosso campo de busca em tempo real</p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn  cyan darken-2">Veja os locais</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.slider');
          var instances = M.Slider.init(elems);
        });</script>
        </body>
        </html>