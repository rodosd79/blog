<?php
    require_once "conexao.php";
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Blog com PHP e MySql</title>
  </head>
  <body>
  <?php include_once ("header.php");?>
    <div class="container mt-5">
       <?php foreach($query as $q){ ?>

        <img src="<?php echo $q['imagem']?>" style="width:90vw;"> 
           <div class="bg-dark p-5 rounded-lg text-white text-center">
             <h1><?php echo $q['title']; ?></h1>
             <p class="text-right"><small class="text-muted"><?php echo $q['data_p'];?></small></p>

             <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="editar.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Editar</a> 

                <form method="POST">
                    <input type="text" hidden value="<?php echo $q['id']?>" name="id">
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Excluir</button>
                    
                </form>
             </div>
       </div>
         <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content']; ?></p>

        <?php } ?>

        <a href="index.php" class="btn btn-outline-dark my-3">Voltar ao inicio</a>

        </div>
    </div>
 

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>