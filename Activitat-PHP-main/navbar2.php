     
     <nav id="barra" class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">INDEX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
            <?php 
          
            if(isset($_POST["nom"])){
              $_SESSION["nom"]=$_POST["nom"];
              echo $_SESSION["nom"];

             
            }
            else if(isset($_SESSION["nom"] )){
                echo $_SESSION["nom"];
                 
            }
            else{
              echo "Usuari no identificat";
             }
           
            ?>
            
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">PAGES</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown04">
              <li><a class="dropdown-item" href="pagina1.php">PAGE 1</a></li>
              <li><a class="dropdown-item" href="pagina2.php">PAGE 2</a></li>
              <li><a class="dropdown-item" href="pagina3.php">PAGE 3</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>