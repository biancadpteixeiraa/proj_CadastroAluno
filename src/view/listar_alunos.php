<?php
require_once "../../valida_acesso.php";

//chamados
$chamados = array();

//abrir o arquivo.hd
$arquivo = fopen('../../arquivo.txt', 'r');

//enquanto houver registros (linhas) a serem recuperados
while(!feof($arquivo)) { //testa pelo fim de um arquivo
  //linhas  
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}

//fechar o arquivo aberto
fclose($arquivo);

// O restante do código permanece o mesmo, mas você pode querer otimizar o código CSS e HTML.
?>

<!-- O conteúdo do arquivo consultar_chamado.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>Lista de cadastros</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de cadastro
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado) { ?>
              
                <?php

                  $chamado_dados = explode('#', $chamado);

                  //
                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $chamado_dados[0]) {
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3) {
                    continue;
                  }

                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                    <p class="card-text"><?=$chamado_dados[3]?></p>

                  </div>
                </div>

              <?php } ?>

              <div class="row mt-4 text-center">
                <div class="col-6 mx-auto">
                  <a class="btn btn-primary btn-block" href="home.php">Voltar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
