        <div class="row">
            <div class="col-md-9 mx-auto">
                <br><br>
                <h1 class="text-center mt-3">Área de Edição dos Posts</h1>
                <?php
                include_once 'aula04/model/blog-model.php';
                $table = getPostTable();
                ?>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Título</th>
                            <th scope="col">Conteúdo</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $table ?>
                    </tbody>
                </table>

            </div>
        </div>