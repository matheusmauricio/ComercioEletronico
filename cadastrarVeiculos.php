<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>:: Cadastro de Veículos ::</title>
  </head>
  <body>

    <form name="form1" method="post" action="cadastrarVeiculosProc.php" enctype="multipart/form-data">
      <p>Legenda:</p>
      <p>*: Comum e obrigatório para todos os Veículos</p>
      <p>¹: Preencher somente para CARROS</p>
      <p>²: Preencher somente para MOTOS</p>
      <p>Obs.: Não Preencha a opção que não tiver nenhum dos ítens listados acima!</p>
      <p>Obs2.: Antes de selecionar as imagens para enviar, renomeie elas para que fiquem com o seguinte padrão: Ex: cg125preta, cg125preta-1, cg125preta-2, cg125preta-3</p>
      <br />
      <p> Nome*: <input name="nome" type="text" value="" /> </p>
      <p> Modelo¹: <input name="modelo" type="text" value="" /> </p>
      <p> Marca*: <input name="marca" type="text" value="" /> </p>
      <p> Câmbio¹: <input name="cambio" type="text" value="" /> </p>
      <p> Portas¹(somente o número): <input name="portas" type="text" value="" /> </p>
      <p> Potência¹: <input name="potencia" type="text" value="" /> </p>
      <p> Cor¹ ²: <input name="cor" type="text" value="" /> </p>
      <p> Ar Condicionado¹(True/False): <input name="arCondicionado" type="text" value="" /> </p>
      <p> Vidro Elétrico¹(True/False): <input name="vidroEletrico" type="text" value="" /> </p>
      <p> Combustível¹: <input name="combustivel" type="text" value="" /> </p>
      <p> Ano*: <input name="ano" type="text" value="" /> </p>
      <p> Preço*: <input name="preco" type="text" value="" /> </p>
      <p> Cilindradas²: <input name="cilindradas" type="text" value="" /> </p>
      <p> Partida Elétrica²(True/False): <input name="partidaEletrica" type="text" value="" /> </p>
      <p> Tipo de Veículo*: <input name="tipoVeiculo" type="text" value="" /> </p>
      <p> Imagem 1*: <input name="imagem1" type="file" value="" /> </p>
      <p> Imagem 2*: <input name="imagem2" type="file" value="" /> </p>
      <p> Imagem 3*: <input name="imagem3" type="file" value="" /> </p>
      <p> Imagem 4*: <input name="imagem4" type="file" value="" /> </p>
      <input name="enviar" value="Cadastrar" type="submit" />
    </form>


  </body>
</html>
