<?php include 'config/cabecalho.php' ?>

<?php 
    include 'blog-parts/model/blog-func.php';
    $introduction = introSection();
    include 'util/header.php' ;
?>

<?php include 'blog-parts/view/main.php' ?> 
<?php include 'util/footer.php' ?> 

<?php include 'config/rodape.php' ?>