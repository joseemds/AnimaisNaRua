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
        <li><a href="#"><i class="material-icons">search</i></a></li>
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

        <div class="container">

        <div class="row card">

    <div class="row">
    <form class="col s12 m7" method="post" action="resposta.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">place</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Endereço</label>
        </div>
      </div>
    
        <div class="input-field col s12">
        <i class="material-icons prefix">edit</i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Descrição do Animal
          </label>
    
      </div>
      <div class="input-field col s12">
      <i class="material-icons prefix">healing</i>

    <select>
      
      <option value="" disabled selected>Selecione o estado do animal</option>
      <option value="1">Bem</option>
      <option value="2">Machucado</option>

    </select>
    <label>Estado do Animal</label>
  </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">person_search</i>
          <textarea id="icon_prefix3" class="materialize-textarea"></textarea>
          <label for="icon_prefix3">Quem Achou</label>
        </div>

      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" required pattern="[0-9]+$" name="telefone"class="validate">
          <span class="helper-text" data-error="Digite um número!"></span>

          <label for="icon_telephone">Telefone</label>
        </div>
        <input type="text" class="datepicker" placeholder="Data">

    </form>
  </div>
    
  </div>   
        </div>

            <script>
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
            </script>
            <script>
              
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);
  });
            </script>

        </body>
        </html>