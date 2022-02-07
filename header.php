<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
  
    </ul>
  </div>


    <?php if(isset($_SESSION["nome"])) { ?>
     <div class="navbar-brand">Olá <?php echo $_SESSION["nome"] ?></div>
        <small><a class="nav-link" href="logout.php">Sair</a></small>
   <?php } else { ?>
    <a class="nav-link" href="login.php">Login</a>
    <?php } ?>
</nav>