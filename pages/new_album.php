<a href="?page=albums">Voltar para os albums</a>
<h1>Cadastrar Novo Álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome: " class="form-control">
    </div>

    <div class="form-group">
        <input type="file" name="img" class="form-control">
    </div>

    <br>

    <button type="submit" class="btn btn-success">
        Cadastrar
    </button>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $albumName = $_POST['name'];

    $path = "albums/$albumName";

    if(!is_dir($path)){
        mkdir($path);
    }

    $file = $_FILES['img'];

    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

    $nameImage = $albumName . '.' . $extension;

    if(move_uploaded_file($file['tmp_name'], $path . '/' . $nameImage)){
        header("Location: ?page=albums");
        exit;
    }else{
        echo "Falha no upload";
    }
}
?>