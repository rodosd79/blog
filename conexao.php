<?php
    //Não aparecem erros do servidor
    ini_set("display_errors", "off");

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_blog";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_errno()){
        echo "<h4 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Não foi possível estabelecer a conexão com o banco de dados</h4>" ;
    }


    //Retornar post para index

    $sql = "SELECT * , date_format(data_post, '%d/%m/%Y %H:%i') as data_p FROM blog_data";
    $query = mysqli_query($conn, $sql);


    // Criar novo post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $imagem = $_REQUEST['imagem'];

        $sql = "INSERT INTO blog_data (title, content, imagem) VALUES ('$title', '$content', '$imagem')";

        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");

        exit();
    }

    // Retorna post do banco por id

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "SELECT * , date_format(data_post, '%d/%m/%Y %H:%i') as data_p FROM blog_data WHERE id = $id";

        $query = mysqli_query($conn, $sql);
    }
    
        //Excluir post
        if(isset($_REQUEST['delete'])){
            $id = $_REQUEST['id'];
    
            $sql = "DELETE FROM blog_data WHERE id = $id";
            mysqli_query($conn, $sql);
    
            header("Location: index.php?info=delete");
            exit();
        }
    //Atualizar post

    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blog_data SET title = '$title', content = '$content' WHERE id = $id";

        mysqli_query($conn, $sql);

        header("Location: index.php?info=update");
        exit();
    }
    





?>