<?php
    namespace POO\FARMACIAPM;

    require_once('Modelo/Pessoa.php');//Requisitando o uso do arquivo pessoa
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use POO\FARMACIAPM\Modelo\Pessoa;//Acessar e usar todos os métodos desse arquivo
    use POO\FARMACIAPM\DAO\Conexao;
    use POO\FARMACIAPM\DAO\Inserir;
    use POO\FARMACIAPM\DAO\Consultar;
    use POO\FARMACIAPM\DAO\Atualizar;
    use POO\FARMACIAPM\DAO\Excluir;

    $pessoa = new Pessoa("123457","Allan","119898989898","Avenida Senador Vergueiro","allan.sobral");

    //Banco de Dados
    $conexao = new Conexao();

    //Inserir dos dados no banco
    $inserir = new Inserir();
    echo $inserir->Insert($conexao,"pessoa",$pessoa->getCPF(),
    $pessoa->getNome(),$pessoa->getTelefone(),$pessoa->getEmail());

    //Consulta no BD
    $consultar = new Consultar();
    //$consultar->ConsultarIndividual($conexao, "pessoa","123456");
    $consultar->ConsultarTudo($conexao, "pessoa");

    //Atualização
    $atualizar = new Atualizar();
    //$atualizar->Atuali($conexao, "pessoa", "123457", "nome", "Jaime Torres");

    $excluir = new Excluir();
    $excluir->Deletar($conexao, "pessoa", "123456");
   

?>