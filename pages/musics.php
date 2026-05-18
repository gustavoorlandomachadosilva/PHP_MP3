<a href="?page=albums">Voltar para os Álbums</a>
<h1>Músicas do Álbum <?= $_GET['album'] ?></h1>

<a href="?page=new_music&album=<?= $_GET['album'] ?>" class="btn btn-success">Cadastrar Nova Música</a>

<hr>
<?php 
    $album = $_GET['album'];
    $musics = getMusics($album);
    foreach($musics as $music):
        $titulo = explode("/", $music);
        $tituloNome = $titulo[3];
 ?>
    <div class="col-12">
        <h4><?= $tituloNome?></h4>
        <audio src="<?=$tituloNome?>" controls></audio>
    </div>


<?php
    endforeach;
 ?>