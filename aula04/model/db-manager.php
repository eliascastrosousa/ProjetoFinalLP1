<?php
    
    $con = mysqli_connect("localhost", "root", "", "elias");

    function getPosts(){
        global $con;
        $sql = "SELECT imagem, cor_categoria, categoria, titulo, conteudo, autor, id,  data FROM post";
        $res = mysqli_query($con, $sql);
        return mysqli_fetch_all($res);
    }


    function getPost($id){
        global $con;
        $sql = "SELECT imagem, categoria, titulo, conteudo FROM post WHERE id = $id";
        $res = mysqli_query($con, $sql);
        return mysqli_fetch_row($res);
    }


    function getPostDetail($id){
        global $con;
        $sql = "SELECT autor, titulo, last_modified FROM post WHERE id = $id";
        $res = mysqli_query($con, $sql);
        return mysqli_fetch_row($res);
    }

    function insertPost($data){
        global $con;
        $sql = "INSERT INTO post (imagem, cor_categoria, categoria, titulo, conteudo, autor)";
        $sql .= " VALUES ('".$data['imagem']."', '".$data['cor_categoria']."', '".$data['categoria'].
        "', '".$data['titulo']."', '".$data['conteudo']."', '".$data['autor']."')";
        return mysqli_query($con, $sql);
    }

    function editPost($data){
        global $con;
        $sql = "UPDATE post SET imagem='".$data['imagem']."', categoria='".$data['categoria']."', ";
        $sql .= "titulo='".$data['titulo']."', conteudo='".$data['conteudo']."' WHERE id = ".$data['id'];
        mysqli_query($con, $sql);
    }

    function deletePost($data){
        global $con;

        $id = $_GET['id'];
        $sql = "DELETE FROM post WHERE id='$id'";
        $apaga_post = mysqli_query($con, $sql);
    }

    // FUNÇÕES LOGIN 

    CLASS Usuario{
        private $pdo;
        public $msgErro = "";

        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $msgErro;

            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            }catch (PDOException $e){
                    $msgErro = $e->getMessage();
                }
        }
        

        public function cadastrar($nome, $email, $senha){
            global $pdo;
            $sql = $pdo->prepare("SELECT id_usuario from usuarios where email = :e");
            $sql->bindValue(":e",$email);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
            }else{
                $sql = $pdo->prepare("insert into usuarios (nome, email,senha) VALUES (:n, :e, :s)");
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",md5($senha));
                $sql->execute();
                return  true;   
            }

        }
        public function logar($email, $senha){
            global $pdo;

            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios where email = :e and senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            if($sql->rowcount() > 0){
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                return true;
            }else{
                return false;
            }
            
        }
    }

?>