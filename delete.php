<?php include 'config/cabecalho.php' ?>
<?php $titulo = 'LP1 RULES' ; ?>
<?php include 'util/headerlogin.php' ?>

<?php 
    include_once 'aula04/model/db-manager.php';
    $id = $_GET['id'];
    $data = deletePost($id);
?>
<h1 class="text-center mt-3">Post apagado com sucesso!</h1>
<a class="btn btn-primary" href="new-post.php" role="button">VOLTAR A AREA DE POSTS</a>

<?php include 'util/footer.php' ?> 

<?php include 'config/rodape.php' ?>