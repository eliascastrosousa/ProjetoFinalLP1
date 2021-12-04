<?php include 'config/cabecalho.php' ?>

<?php 
    include 'aula04/model/data-model.php';
    include 'aula04/model/blog-model.php';
    include 'aula04/model/blog-func.php';
    $introduction = introSection('Projeto Final - Blog Variado');
    include 'util/header.php' 
?>

<?php include 'aula04/view/main.php' ?> 
<?php include 'util/footer.php' ?> 
<?php include 'config/rodape.php' ?>