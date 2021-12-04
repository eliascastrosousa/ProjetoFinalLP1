<?php include 'config/cabecalho.php' ?>
<?php $titulo = 'Detalhes das postagens' ; ?>
<?php include 'util/headerlogin.php' ?>
<main>
    <div class="container">
        <?php
            include_once 'aula04/model/blog-model.php';
            $table = getPostTableDetail();
        ?>
        <?php include 'blog-parts/view/detalhes-lista.php' ?> 
    </div>
</main>

<?php include 'util/footer.php' ?> 
<?php include 'config/rodape.php' ?>