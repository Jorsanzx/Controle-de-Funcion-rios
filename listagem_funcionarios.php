<?php

session_start();

include_once("conexao.php");


// Aqui precisa de codigo para consultar o BD(query), armazenar em $resultado.
// Tambem precisa de loop para pegar inf em cada ID (não criado no BD).
$id = $_GET['id']; 

foreach($id as $id){

$nome = $_GET["name"];
$cpf = $_GET["cpf-number"];
$cargo = $_GET["occupation"];
$salario = $_GET["salary"];
$date = $_GET["date"];
$obs = $_GET["obs"];
}

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR FREQUENCY</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styleListagem.css">
</head>

<body class="main-bg">
  <aside class="menu white-bg">
    <div class=" main-content menu-content">
      <h1>
        <a href="#home"><img src="/assets/img/main-logo.png" alt=""></a>
      </h1>

      <nav>
        <ul>
          <li><a href="/index.html">HOME</a></li>
          <li><a href="/assets/pages/listagem_funcionarios.html">LISTAGEM </a></li>
          <li><a href="/assets/pages/cadastro_funcionarios.html">CADASTRO</a></li>
          <li><a href="/assets/pages/controle_frequencias.html">CONTROLE DE FREQUÊNCIA</a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="menu-spacing"></div>


  <section id="home" class="intro section title-bg">
    <div class="section fade-bg">
      <div></div>
      <div class="intro-content">
        <h2 id="listah1">Funcionários</h2>
        <table class="listaBorda">
          <tr class="listaBorda">
            <th>Ações</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Data Admissão</th>
          </tr>

          <?php foreach ($cadastro as $cadastro): ?>

          <tr class="listaBorda">
            <td> <button class="crud">Editar</button>
              <button class="crud">Excluir</button>
            </td>
            <!-- Provavelmente vou precisar substituir o echo por _GET -->
            <td> teste1 teste2
              <?php echo $nome['nome']; ?>
            </td>
            <td> teste1 teste2
              <?php echo $cpf['cpf']; ?>
            </td>
            <td> teste1 teste2
              <?php echo $cargo['cargo']; ?>
            </td>
            <td> teste1 teste2
              <?php echo $salario['salary']; ?>
            </td>
            <td> teste1 teste2
              <?php echo $date['date']; ?>
            </td>
            <td> teste1 teste2
              <?php echo $obs['obs']; ?>
            </td>

          </tr>

          <?php endforeach; ?>


        </table>
      </div>
    </div>
  </section>

  <footer class="main-bg">
    <div class="footer-content">
      <ul>
        <li>Tel: (71) 99999-9999</li>
        <li>Cel: (71) 99999-9999</li>
        <li><a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512">
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg> Instagram</a></li>
      </ul>
      <p>Feito por: </p>
    </div>
  </footer>

</body>

</html>