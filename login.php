<?php
    require_once "conexao.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Blog com PHP e MySql</title>
  </head>
  <body>

    <?php if(isset($_GET['erro'])){ ?>
        <script>alert("Email e/ou senha inválidos")</script>
    <?php } ?>

    <div class="container mt-5" style="width: 50vw;">
        <h3>Login</h3>

        <form method="POST" action="verifica_login.php" class="mt-5">
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="Senha">Senha</label>
                <input type="password" id="Senha" class="form-control" name="senha">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>


    </div>

 

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>