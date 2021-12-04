<?php 
    require_once 'aula04/model/db-manager.php' ; 
    $u = new Usuario;
?>


<br><br><br><br>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <form class="text-center border border-light p-5" method="POST">
                    <p class="h4 mb-4 text-center">Cadastre aqui</p>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" name="nome" class="form-control" maxlength="100" />
                                <label class="form-label" for="form3Example1">Nome Completo</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" name="email" class="form-control" maxlength="40"/>
                        <label class="form-label" for="form3Example3">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" name="senha" class="form-control" maxlength="15"/>
                        <label class="form-label" for="form3Example4">Senha</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['nome'])){
        $nome = addslashes( $_POST['nome']);
        $email = addslashes( $_POST['email']);
        $senha = addslashes( $_POST['senha']);
        if(!empty($nome) && !empty($email) && !empty($senha)){
            $u->conectar("elias", "localhost", "root", "");
            if($u->msgErro == ""){
                
                if($u->cadastrar($nome, $email, $senha)){
                    ?> 
                        <script> alert("Cadastrado com Sucesso!"); </script>
                    <?php
                }else{
                    ?> 
                        <script> alert("Email já Cadastrado!"); </script>
                    <?php
                }
            }else{
                echo "Erro: ".$u->msgErro;
            }
        }else{
            ?> 
                <script> alert("Preencha todos os Campos!"); </script>
            <?php
        }
    }

?>

