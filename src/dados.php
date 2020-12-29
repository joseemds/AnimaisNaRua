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

<div class="container">
  <div class="row card">

  <?php
include("db_connect.php");

    echo "<p>".$_POST['descricao']."</p>";
    echo "<p>".$_POST['bairro']."</p>";
    echo "<p>".$_POST['estado']."</p>";
    echo "<p>".$_POST['pessoa']."</p>";
    echo "<p>".$_POST['telefone']."</p>";
    echo "<p>".$_POST['data']."</p>";



    foreach($bairros as $bairro) {
      echo "<p>{$bairro['bai_nome']}</p>";
    }
    $pessoa = $_POST['pessoa'];
    $bairro = $_POST['bairro'];
    $contato = $_POST['telefone'];
    $data = $_POST['data'];
    $descricao = $_POST['descricao'];
    $estado = $_POST['estado'];

    $insert_query = "INSERT INTO tb_animais SET 
    ani_desc = '$descricao', 
    ani_est = '$estado',
    ani_dat_enc = '$data',
    ani_contato = '$contato',
    ani_bai_codigo = '$bairro',
    ani_pessoa = '$pessoa'
    ";
		$sql = $pdo->query($insert_query);



?>

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
          <tr>
            <td><?php echo "<p>".$_POST['descricao']."</p>";?></td>
            <td><?php echo "<p>".$_POST['bairro']."</p>";?></td>
            <td><?php echo "<p>".$_POST['estado']."</p>";?></td>
            <td><?php echo "<p>".$_POST['pessoa']."</p>";?></td>
            <td><?php echo "<p>".$_POST['telefone']."</p>";?></td>
            <td><?php echo "<p>".$_POST['data']."</p>";?></td>
          </tr>
          <tr>
        </tbody>
      </table>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14127.823208800766!2d-37.09620968590643!3d-6.459890964979759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1609251199686!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
</div>

</div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        
            <title>Animais de Rua</title>
        </head>
        <body>

        <div class="container">

        </div>

        </body>
        </html>