<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="../../assets/css/style_controle_frequencias.css"> 
</head>
<body class="main-bg">
    <aside class= "menu white-bg">
        <div class=" main-content menu-content">
            <h1>
                <a href="#home"><img src="../../assets/img/main-logo.png" alt=""></a>
            </h1>

            <nav>
                <ul>
                    <li><a href="../../view/index.php">HOME</a></li>
                    <li><a href="../pages/listagem_funcionarios.php">LISTAGEM </a></li>
                    <li><a href="../pages/cadastro_funcionarios.php">CADASTRO</a></li>
                    <li><a href="../pages/controle_frequencias.php">CONTROLE DE FREQUÊNCIA</a></li>
                </ul>
            </nav>
        </div>   
    </aside>

    <section id="home" class="intro section title-bg">
        <div class="section fade-bg">
            <div></div><!-- Verificar o comportamento dessa div-->
            <div class="intro-content">
                <div class="input-cpf">
                    <label for="cpf">Informe o cpf do Funcionário: </label>
                    <input type="text" name="cpf" id="cpf">
                </div>
                <H4>Funcionário</H4>
                <div class="data-func"><!-- Dados do objeto funcionário-->
                    <p>Lucas Ferraz</p>
                    <p>Desenvolvedor Java</p>
                    <p>99999999999</p>
                    <p>01/10/2020</p>

                </div>
                
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