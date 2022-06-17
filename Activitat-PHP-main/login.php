<!doctype html>
<html lang="en">
    
    <?php 
    include('header.php')
   
    ?>
    <body>  
    <?php 
    include('navbar.php')
    ?>
    <h1>INICI DE SESSIÓ</h1> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
            <form action="index.php" method="POST">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Identificat usuari</label>
                 <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                 <div id="emailHelp" class="form-text">Introdueix les teves dades</div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </body>
 </html>
