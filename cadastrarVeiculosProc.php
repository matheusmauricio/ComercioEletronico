<?php

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");


    if(isset($_POST)){
      $nome = $_POST['nome'];
      $modelo = $_POST['modelo'];
      $marca = $_POST['marca'];
      $cambio = $_POST['cambio'];
      $portas = $_POST['portas'];
      $potencia = $_POST['potencia'];
      $cor = $_POST['cor'];
      $arCondicionado = $_POST['arCondicionado'];
      $vidroEletrico = $_POST['vidroEletrico'];
      $combustivel = $_POST['combustivel'];
      $ano = $_POST['ano'];
      $preco = $_POST['preco'];
      $cilindradas = $_POST['cilindradas'];
      $partidaEletrica = $_POST['partidaEletrica'];
      $tipoVeiculo = strtolower($_POST['tipoVeiculo']);
      //$imagem1 = $_POST['imagem1'];
      /*$imagem2 = $_POST['imagem2'];
      $imagem3 = $_POST['imagem3'];
      $imagem4 = $_POST['imagem4'];*/

      $tiposPermitidos= array('image/jpeg');

      $tamanhoPermitido = 1024 * 700; // 700 Kb

      // O nome original do arquivo no computador do usuário
      $arqName1 = $_FILES['imagem1']['name'];
      // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
      $arqType1 = $_FILES['imagem1']['type'];
      // O tamanho, em bytes, do arquivo
      $arqSize1 = $_FILES['imagem1']['size'];
      // O nome temporário do arquivo, como foi guardado no servidor
      $arqTemp1 = $_FILES['imagem1']['tmp_name'];
      // O código de erro associado a este upload de arquivo
      $arqError1 = $_FILES['imagem1']['error'];

      // O nome original do arquivo no computador do usuário
      $arqName2 = $_FILES['imagem2']['name'];
      // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
      $arqType2 = $_FILES['imagem2']['type'];
      // O tamanho, em bytes, do arquivo
      $arqSize2 = $_FILES['imagem2']['size'];
      // O nome temporário do arquivo, como foi guardado no servidor
      $arqTemp2 = $_FILES['imagem2']['tmp_name'];
      // O código de erro associado a este upload de arquivo
      $arqError2 = $_FILES['imagem2']['error'];

      // O nome original do arquivo no computador do usuário
      $arqName3 = $_FILES['imagem3']['name'];
      // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
      $arqType3 = $_FILES['imagem3']['type'];
      // O tamanho, em bytes, do arquivo
      $arqSize3 = $_FILES['imagem3']['size'];
      // O nome temporário do arquivo, como foi guardado no servidor
      $arqTemp3 = $_FILES['imagem3']['tmp_name'];
      // O código de erro associado a este upload de arquivo
      $arqError3 = $_FILES['imagem3']['error'];

      // O nome original do arquivo no computador do usuário
      $arqName4 = $_FILES['imagem4']['name'];
      // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
      $arqType4 = $_FILES['imagem4']['type'];
      // O tamanho, em bytes, do arquivo
      $arqSize4 = $_FILES['imagem4']['size'];
      // O nome temporário do arquivo, como foi guardado no servidor
      $arqTemp4 = $_FILES['imagem4']['tmp_name'];
      // O código de erro associado a este upload de arquivo
      $arqError4 = $_FILES['imagem4']['error'];

      if ($arqError1 == 0 && $arqError2 == 0 && $arqError3 == 0 && $arqError4 == 0) {
        // Verifica o tipo de arquivo enviado
        if ((array_search($arqType1, $tiposPermitidos) === false) && ((array_search($arqType2, $tiposPermitidos) === false) && ((array_search($arqType3, $tiposPermitidos) === false) && ((array_search($arqType4, $tiposPermitidos) === false))))) {
          echo 'O tipo de arquivo enviado é inválido!';
        // Verifica o tamanho do arquivo enviado
      } else if ($arqSize1 > $tamanhoPermitido && $arqSize2 > $tamanhoPermitido && $arqSize3 > $tamanhoPermitido && $arqSize4 > $tamanhoPermitido) {
          echo 'O tamanho do arquivo enviado é maior que o limite!';
        // Não houveram erros, move o arquivo
        } else {
          if($tipoVeiculo == carro){
            $pasta = 'C:/xampp/htdocs/ComercioEletronico/imagens/Carros/';
          } else if ($tipoVeiculo == moto){
            $pasta = 'C:/xampp/htdocs/ComercioEletronico/imagens/Motos/';
          } else if ($tipoVeiculo == caminhao){
            $pasta = 'C:/xampp/htdocs/ComercioEletronico/imagens/Caminhao/';
          } else if($tipoVeiculo == onibus){
            $pasta = 'C:/xampp/htdocs/ComercioEletronico/imagens/Onibus/';
          }


          $imagem1 = $arqName = $_FILES['imagem1']['name'];
          $imagem2 = $arqName = $_FILES['imagem2']['name'];
          $imagem3 = $arqName = $_FILES['imagem3']['name'];
          $imagem4 = $arqName = $_FILES['imagem4']['name'];

          $upload1 = move_uploaded_file($arqTemp1, $pasta . $imagem1);
          $upload2 = move_uploaded_file($arqTemp2, $pasta . $imagem2);
          $upload3 = move_uploaded_file($arqTemp3, $pasta . $imagem3);
          $upload4 = move_uploaded_file($arqTemp4, $pasta . $imagem4);
          // Verifica se o arquivo foi movido com sucesso

          if ($upload1 == true && $upload2 == true && $upload3 == true && $upload4 == true) {
            if($tipoVeiculo == carro){
              $SQL = "INSERT INTO 'Produto' ('nome', 'modelo', 'marca', 'cambio', 'portas', 'potencia', 'cor', 'arCondicionado',
              'vidroEletrico', 'combustivel', 'ano', 'preco', 'cilindradas', 'partidaEletrica', 'tipoVeiculo', 'imagem1', 'imagem2', 'imagem3', 'imagem4') VALUES ('$nome', '$modelo', '$marca', '$cambio', '$portas', '$potencia', '$cor',
              '$arCondicionado', '$vidroEletrico', '$combustivel', '$ano', '$preco', '$cilindradas', '$partidaEletrica',
              '$tipoVeiculo', 'imagens/Carros/$imagem1', 'imagens/Carros/$imagem2', 'imagens/Carros/$imagem3', 'imagens/Carros/$imagem4')";
            } else if($tipoVeiculo == moto){
              $SQL = "INSERT INTO 'Produto' ('nome', 'modelo', 'marca', 'cambio', 'portas', 'potencia', 'cor', 'arCondicionado',
              'vidroEletrico', 'combustivel', 'ano', 'preco', 'cilindradas', 'partidaEletrica', 'tipoVeiculo', 'imagem1', 'imagem2', 'imagem3', 'imagem4') VALUES ('$nome', '$modelo', '$marca', '$cambio', '$portas', '$potencia', '$cor',
              '$arCondicionado', '$vidroEletrico', '$combustivel', '$ano', '$preco', '$cilindradas', '$partidaEletrica',
              '$tipoVeiculo', 'imagens/Motos/$imagem1', 'imagens/Motos/$imagem2', 'imagens/Motos/$imagem3', 'imagens/Motos/$imagem4')";
            } else if($tipoVeiculo == caminhao){
              $SQL = "INSERT INTO 'Produto' ('nome', 'modelo', 'marca', 'cambio', 'portas', 'potencia', 'cor', 'arCondicionado',
              'vidroEletrico', 'combustivel', 'ano', 'preco', 'cilindradas', 'partidaEletrica', 'tipoVeiculo', 'imagem1', 'imagem2', 'imagem3', 'imagem4') VALUES ('$nome', '$modelo', '$marca', '$cambio', '$portas', '$potencia', '$cor',
              '$arCondicionado', '$vidroEletrico', '$combustivel', '$ano', '$preco', '$cilindradas', '$partidaEletrica',
              '$tipoVeiculo', 'imagens/Caminhao/$imagem1', 'imagens/Caminhao/$imagem2', 'imagens/Caminhao/$imagem3', 'imagens/Caminhao/$imagem4')";
            } else if($tipoVeiculo == onibus){
              $SQL = "INSERT INTO 'Produto' ('nome', 'modelo', 'marca', 'cambio', 'portas', 'potencia', 'cor', 'arCondicionado',
              'vidroEletrico', 'combustivel', 'ano', 'preco', 'cilindradas', 'partidaEletrica', 'tipoVeiculo', 'imagem1', 'imagem2', 'imagem3', 'imagem4') VALUES ('$nome', '$modelo', '$marca', '$cambio', '$portas', '$potencia', '$cor',
              '$arCondicionado', '$vidroEletrico', '$combustivel', '$ano', '$preco', '$cilindradas', '$partidaEletrica',
              '$tipoVeiculo', 'imagens/Onibus/$imagem1', 'imagens/Onibus/$imagem2', 'imagens/Onibus/$imagem3', 'imagens/Onibus/$imagem4')";
            }


            $resultado = $conexaoBanco->query($SQL);

            header("location: homeAdm.php");

          }
        }
    } else {
      echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
    }



  }


  ?>
