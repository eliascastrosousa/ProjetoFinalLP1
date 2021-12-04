<?php 
    require_once 'aula04/model/db-manager.php' ; 
    $u = new Usuario;
?>

<br><br><br><br>

<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="row">
      <div class="col-md-9 mx-auto">
        <form class="text-center border border-light p-5"  method="POST">
          <p class="h4 mb-4 text-center">Fazer Login</p>

          <div class="form-outline mb-4">
            <input type="email" id="form1Example1" name="email" class="form-control" maxlength="40"/>
            <label class="form-label" for="form1Example1">Usuario</label>
          </div>

          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" name="senha" class="form-control" maxlength="15" />
            <label class="form-label" for="form1Example2">Senha</label>
          </div>

          <div class="text-center">
            <p>Não é Membro? <a href="cadastro.php">Cadastre-se!</a></p>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Entrar</button>

        </form>
      </div>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['email'])){
  $email = addslashes( $_POST['email']);
  $senha = addslashes( $_POST['senha']);
  if(!empty($email) && !empty($senha)){
    $u->conectar("elias", "localhost", "root", "");

    if ($u->msgErro == ""){  
      if ($u->logar($email,$senha)){
        header("location: new-post.php");
    }else{
      ?> 
        <script> alert("Email ou Senha incorretos!"); </script>
      <?php
    }
  }else{
    ?> 
      <script> alert("Erro no banco! "); </script>
    <?php
  }
}else{
  ?> 
    <script> alert("Preencha todos os Campos!"); </script>
  <?php
  }
}

?>