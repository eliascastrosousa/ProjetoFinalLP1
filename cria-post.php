<?php include 'config/cabecalho.php' ?>

<?php
    include_once 'aula04/model/db-manager.php';
    insertPost($_POST);
?>
<br>
<p class="h4 mb-4 text-center">POST CRIADO COM SUCESSO!</p>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="index.php"> <button class="btn btn-primary" type="button"> Voltar ao Blog</button> </a>   
<a href="new-post.php"> <button class="btn btn-primary" type="button"> Voltar a Area de Criação de Posts</button></a>  
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Imagem</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['imagem'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Cor da Categoria</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['cor_categoria'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Categoria</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['categoria'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Título</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['titulo'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Conteúdo</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['conteudo'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <p class="alert alert-danger text-center">Autor</p>
        </div>
        <div class="col-md-6">
            <p class="alert alert-primary text-left"><?= $_POST['autor'] ?></p>
        </div>
    </div>
</div>

<?php include 'util/footer.php' ?> 
<?php include 'config/rodape.php' ?>

