<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">

</head>
<body>

    <section>

    
    <form action="/processar-cadastro" method="post">

    <div>
                <h1>cadastro</h1>
            </div>
            <br>
        <!-- Seção de Informações Pessoais -->
            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="idade">RG:</label>
            <input type="text" id="RG" name="RG" required>
            <label for="email">Telefone:</label>
            <input type="Telefone" id="Telefone" name="Telefone" required>
        </fieldset>
        <br>
        <br>
        <!-- Seção de Endereço -->

            <legend>possui algum plano de saúde?</legend>
            <input align-center
      type="checkbox"
      id="codificação"
      name="interesse"
      value="codificação"
      checked />
    <label for="coding"> Sim </label>
  </div>
  <div>
    <input type="checkbox" id="música" name="interesse" value="música" />
    <label for="music"> Não </label>
  </div>
</fieldset>
            <label for="rua">quais:</label>
            <input type="text" id="quais" name="quais">
            <br>
            <br>
            <legend>Utiliza farmácia popular?</legend>
            <input align-center
      type="checkbox"
      id="codificação"
      name="interesse"
      value="codificação"
      checked />
    <label for="coding"> Sim </label>
  </div>
  <div>
    <input type="checkbox" id="música" name="interesse" value="música" />
    <label for="music"> Não </label>
  </div>
</fieldset>
            <label for="rua">quais produtos:</label>
            <input type="text" id="quais" name="quais">

 
   
        <br>
        <br>
        <!-- Botão de Envio -->
        <input type="submit" value="Confirmar cadastro">
    </form>
    </section>
 
</body>
</html>