<?php
    require_once "conexao.php";

    session_start();
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
    <?php include_once ("header.php");?>

    <div class="container mt-5 bg-light">

        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){ ?>
                <div class="alert alert-success" role="alert">
                    Postagem adicionada com sucesso
                </div>
            <?php } else 
                if($_REQUEST['info'] == "delete"){ ?>
                <div class="alert alert-danger" role="alert">
                    Postagem excluida com sucesso
                </div>
            
        <?php }} ?>



        <div class="text-center">
            <a href="criar.php" class="btn btn-outline-dark">+ Criar uma nova postagem</a>
        </div>


        <!--Mostrar posts do banco de dados-->
        <div class="row">
           <?php foreach($query as $q){ ?>    
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                       <img src="<?php echo $q['imagem']?>" class="card-img-top" alt="<?php echo $q['alt_img']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'],0,50);?>...</p>
                            <p class="card-text"><small class="text-muted"><?php echo $q['data_p'];?></small></p>
                            <a href="visualizar.php?id=<?php echo $q['id']?>" class="btn btn-light">Leia mais<span class="text-danger">&rarr;</span></a>
                        </div>
                     </div>
                 </div>
            <?php } ?>


        </div>


    
    </div>
 

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>