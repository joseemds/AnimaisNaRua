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

    .container{
      width: 150%;
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
  <div class="container ">
    <div class="row card">
     
    <div class="row">
    <form class="col s2" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
          
          <input type="text" id="procurar" name="search" minlength="1">
          <button class="waves-effect waves-light btn  cyan darken-2" type="submit" name="submit" value="Search">Procurar
            <i class="material-icons right">search</i>
          </button>          
          <label for="procurar">Buscar</label>
        
          <?php 

          $search = "%" . $_POST["search"] . "%";
          include("db_connect.php");

          $query = "SELECT *
          FROM `tb_animais` JOIN tb_bairros ON bai_codigo = ani_bai_codigo WHERE ani_desc LIKE '$search'";

          $result = $pdo -> query($query);    

   
          ?>
        </div>
      </div>
    </form>

    <?php if(isset($_POST['search'])) { ?>

<table class="centered">
  
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Bairro</th>
            <th>Estado</th>
            <th>Pessoa</th>
            <th>Telefone</th>
            <th>Data</th>

        </tr>
    </thead>

    <tbody>
          <?php foreach ($result as $animal) { ?>
        <tr>
            <td>
                <p><?php echo $animal["ani_desc"] ?></p>
            </td>
            <td>
                <p><?php echo $animal["bai_nome"] ?></p>
            </td>
            <td>
                <p><?php echo $animal["ani_est"] ?></p>
            </td>
            <td>
                <p><?php echo $animal["ani_pessoa"] ?></p>
            </td>
            <td>
                <p><?php echo $animal["ani_contato"] ?></p>
            </td>
            <td>
                <p><?php echo $animal["ani_dat_enc"] ?></p>
            </td>
        </tr>
            <?php }?>
    </tbody>
</table>


<?php  } ?>

  </div>


    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>