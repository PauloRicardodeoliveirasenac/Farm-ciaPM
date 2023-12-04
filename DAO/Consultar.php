<?php
    namespace POO\FARMACIAPM\DAO;

    require_once('Conexao.php');

    use POO\FARMACIAPM\DAO\Conexao;

    class Consultar{
        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $cpf){
            try{
                $conn   = $conexao->Conectar();
                $sql    = "select * from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo "<br><br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"].
                        "<br>Telefone: ".$dados["telefone"].
                    }
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }//fim do catch
        }//fim do método

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela){
            try{
                $conn   = $conexao->Conectar();
                $sql    = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"].
                        "<br>Telefone: ".$dados["telefone"].
        
                }//fim do enquanto

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método
    }//fim do consultar
?>