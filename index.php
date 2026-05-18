<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MP3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
       <?php 
            include_once("helpers.php");

            if(isset($_GET['page'])){
                if(file_exists("pages/{$_GET['page']}.php")){
                    include_once("pages/{$_GET['page']}.php");
                }
                else{
                    include_once("pages/error404.php");
                }
            }
            else{
                include_once("pages/albums.php");
            }
        ?>
    </div>    
  </body>
</html>