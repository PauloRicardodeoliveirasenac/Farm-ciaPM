<?php
    namespace POO\FARMACIAPM\DAO;

    require_once('Conexao.php');//Acessando a minha classe de conexão

    use POO\FARMACIAPM\DAO\Conexao;

    class Inserir{
        public function Insert(Conexao $conexao,string $nomeTabela,int $cpf,string $nome,string $telefone)
        {
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone) values('$cpf','$nome','$telefone')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }else{
                    return "<br><br>Não Inserido!";
                }

                mysqli_close($conn);//Fechando a conexão com o BD
            }catch(Except $erro){
                echo $erro;
            }


        }//fim do método insert

    }//fim da classe
?>