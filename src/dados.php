<html lang="pt-BR">

<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
    body {
        background-image: url('https://cdn.hipwallpaper.com/i/32/36/0sbji6.jpg');
    }
    p{
        text-overflow:  ellipsis;
        overflow: hidden;
        max-width: 300px;
        text-align: center;
    }

    </style>
    <title>Animais de Rua</title>

    <nav>
        <div class="nav-wrapper  cyan darken-2">
            <a href="home.php" class="brand-logo"><i class="material-icons">pets</i>AnimalCare</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="home.php"><i class="material-icons">home</i></a></li>
                <li><a href="index.php"><i class="material-icons">edit</i></a></li>
                <li><a href="dados.php"><i class="material-icons">auto_graph</i></a></li>
                <li><a href="map.php"><i class="material-icons">search</i></a></li>
            </ul>
        </div>
    </nav>

</head>

<body>

    <div class="container">
        <div class="row card">

            <?php
            include("db_connect.php");

    // echo "<p>".$_POST['descricao']."</p>";
    // echo "<p>".$_POST['bairro']."</p>";
    // echo "<p>".$_POST['estado']."</p>";
    // echo "<p>".$_POST['pessoa']."</p>";
    // echo "<p>".$_POST['telefone']."</p>";
    // echo "<p>".$_POST['data']."</p>";



    if(isset($_POST['descricao'])){

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
    $pdo->query($insert_query);

    $select_bairros = "SELECT * FROM TB_BAIRROS WHERE BAI_CODIGO = '$bairro'";
    $result_bairros = $pdo->query($select_bairros);
    $bairro = $result_bairros -> fetch(); 

  }

  $select_animais= "SELECT COUNT( ani_desc ) AS total, ani_dat_enc
  FROM tb_animais
  GROUP BY YEAR( ani_dat_enc ) , WEEK( ani_dat_enc )
  LIMIT 0 , 30;";
  $datas = $pdo->query($select_animais);


?>
            <?php if(isset($_POST['descricao'])) { ?>

            <table class="centered">
              <h4 class="center">Dados Enviados!</h4>
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
                        <td>
                            <p><?php echo $_POST["descricao"] ?></p>
                        </td>
                        <td>
                            <p><?php echo $bairro["bai_nome"] ?></p>
                        </td>
                        <td>
                            <p><?php echo $_POST["estado"] ?></p>
                        </td>
                        <td>
                            <p><?php echo $_POST["pessoa"] ?></p>
                        </td>
                        <td>
                            <p><?php echo $_POST["telefone"] ?></p>
                        </td>
                        <td>
                            <p><?php echo $_POST["data"] ?></p>
                        </td>
                    </tr>
                    <tr>
                </tbody>
            </table>


            <?php  } ?>
            <table class="centered">
            <h4 class="center"> Animais encontrados por semana</h4>

        <thead>
          <tr>
              <th>Semana</th>
              <th>Total de animais</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <?php 
            foreach ($datas as $data) {

              echo"
              <tr>
                <td> {$data['ani_dat_enc']} </td>
                <td> {$data['total']}</td>
              </tr>
              
              ";
            }
            ?>
        </tr>
         
        </tbody>
      </table>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>



</html>