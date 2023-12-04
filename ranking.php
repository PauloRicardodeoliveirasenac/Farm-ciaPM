<?php

class Ranking
{
    private $ranking = [];
 
    // Adicionar pontuação ao ranking
    public function adicionarPontuacao($usuario, $pontuacao)
    {
        $this->ranking[$usuario] = $pontuacao;
        arsort($this->ranking); // Ordenar o ranking por pontuação em ordem decrescente
    }
 
    // Exibir o ranking
    public function exibirRanking()
    {
        echo "Ranking:\n";
        $posicao = 1;
        foreach ($this->ranking as $usuario => $pontuacao) {
            echo "$posicao. $usuario - Pontuação: $pontuacao\n";
            $posicao++;
        }
    }
}
 
// Exemplo de uso
$ranking = new Ranking();
 
// Adicionar pontuações
$ranking->adicionarPontuacao('farmacia', 1500);
$ranking->adicionarPontuacao('Usuário2', 1200);
$ranking->adicionarPontuacao('Usuário3', 200);
$ranking->adicionarPontuacao('Usuário3', 200);
$ranking->adicionarPontuacao('Usuário3', 200);
 
// Exibir ranking atualizado
$ranking->exibirRanking();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ranking Table</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
 
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
 
    th {
      background-color: #f2f2f2;
    }
    
  </style>
</head>
<body>
 
  
  
  <table>
    <thead>
      <tr>
        <th>Posição</th>
        <th>Nome</th>
        <th>Pontuação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John Doe</td>
        <td>1000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jane Smith</td>
        <td>950</td>
      </tr>
      <!-- Adicione mais linhas conforme necessário -->
    </tbody>
  </table>
 
</body>
</html>