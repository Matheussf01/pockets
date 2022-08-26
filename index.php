<?php
$link = mysqli_connect("server540", "u722625667_pockets", "@Pockets2022", "u722625667_pockets");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 

?> 

<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <section class="start">
      <div>

        <div class="logo">
          <img src="assets/logo.png" alt="">
        </div>
        <div class="row-btn">
          <a href="game.html" class="btn-start">
            <img src="assets/start.png" alt="">
          </a>
        </div>

      </div>  
    </section>




  </body>
</html>

<?php
mysqli_close($link);
?>