<html lang="pt-BR">

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      background-image: url("https://cdn.hipwallpaper.com/i/32/36/0sbji6.jpg");
    }
  </style>
  <title>Animais de Rua</title>
</head>

<body>
  <nav>
    <div class="nav-wrapper cyan darken-2">
      <a href="home.php" class="brand-logo"><i class="material-icons">pets</i>AnimalCare</a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="home.php"><i class="material-icons">home</i></a>
        </li>
        <li>
          <a href="index.php"><i class="material-icons">edit</i></a>
        </li>
        <li>
          <a href="dados.php"><i class="material-icons">auto_graph</i></a>
        </li>
        <li>
        <a href="map.php"><i class="material-icons">search</i></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row card">
      <div class="row">
        <form class="col s12 m7" method="post" action="dados.php" enctype="multipart/form-data">
          <div class="input-field col s12">
            <i class="material-icons prefix">edit</i>
            <textarea id="textarea1" name="descricao" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="2" maxlength="60" class="materialize-textarea validate"></textarea>
            <label for="textarea1" >Descrição do Animal </label>
            <span class="helper-text" data-error="Digite a descrição!"></span>
      
          </div>
          <div class="input-field col s12">
                    <i class="material-icons prefix">place</i>
    <select name="bairro">
      

      <option value="" disabled selected >Escolha um bairro</option>

      <?php
      include("db_connect.php");
      $bairros = $pdo -> query('select * from tb_bairros;');

      foreach($bairros as $bairro) {
        echo "<option value='{$bairro['bai_codigo']}'>{$bairro['bai_nome']}</option>";
      }
      
      ?>
  
    </select>
    <label>Em qual bairro o animal foi encontrado?</label>
  </div>

          
          
          <div class="input-field col s12">
            <i class="material-icons prefix">healing</i>

            <select name = "estado">
              <option value="" disabled selected >
                Selecione o estado do animal
              </option>
              <option value="bem" >Bem</option>
              <option value="machucado" >Machucado</option>
            </select>
            <label>Estado do Animal</label>
          </div>

          <div class="input-field col s6">
            <i class="material-icons prefix">person_search</i>
            <textarea id="icon_prefix3" class="materialize-textarea validate" name="pessoa" required pattern="[a-zA-Z]*"  required minlength="2" maxlength="20" ></textarea>
            <span class="helper-text" data-error="Digite um nome!"></span>
            <label for="icon_prefix3">Quem Achou</label>
          </div>

          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" type="tel" required pattern="[0-9]+$" name="telefone" maxlength="12" class="validate" />
            <span class="helper-text" data-error="Digite um número!"></span>

            <label for="icon_telephone">Telefone</label>
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">calendar_today</i>
            <input type="text" class="datepicker" placeholder="Data" name="data" required />
            <label for="icon_telephone">Em qual data o animal foi encontrado?</label>
          </div>
        <div class="input-field col s12">
        <button class="btn waves-effect waves-light cyan darken-2" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    var textarea = document.getElementById("#textarea1");
    M.textareaAutoResize(textarea);
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var select_options = document.querySelectorAll("select");
      M.FormSelect.init(select_options);
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var elems = document.querySelectorAll(".datepicker");
      var instances = M.Datepicker.init(elems, {format: 'yyyy-mm-dd'});
    });
  </script>

</body>

</html>