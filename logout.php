<!doctype html>
<html lang="en">
    
    <?php 
    include('header.php')
   
    ?>
    <body>
        
    <?php 
    include('navbar.php')
    ?>
    <?php
    
    setcookie("nom", "", time() - 3600);
    session_destroy();
    header ("http://p205_maria_mollevi_luna.test/login.php");
    exit;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </body>

    </html>
