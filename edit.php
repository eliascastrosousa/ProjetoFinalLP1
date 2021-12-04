<?php include 'config/cabecalho.php' ?>
<?php $titulo = 'Edite seu post' ; ?>
<?php include 'util/headerlogin.php' ?>

<?php 
    include_once 'aula04/model/db-manager.php';
    $id = $_GET['id'];
    $data = getPost($id);
?>
<?php include 'blog-parts/view/form-post.php' ?>
<?php include 'util/footer.php' ?> 

<?php include 'config/rodape.php' ?>