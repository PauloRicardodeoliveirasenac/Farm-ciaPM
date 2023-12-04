<?php
    namespace POO\FARMACIAPM\DAO;

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','pm');
                if($conn){
                    echo "Conectado com sucesso!";
                    return $conn;
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método
    }//fim da classe
?>