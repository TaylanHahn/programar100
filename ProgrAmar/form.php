<!DOCTYPE html>
<html lang="pt-br">
<head>

        <!-- ICONES  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="form.css">
    <script src="main.js" defer></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgrAmar | Contato</title>
</head>
<body>

    <header class="header">
            
    <img class="logo" src="img/logo1.png" alt="A letra V em tom verde na horizontal para o lado esquerdo e outro V na horizontal para o lado direito, entre um coração roxo. Com uma escrita abaixo 'ProgrAmar' em tom verde e roxo.">


    <nav class="navbar">
      <a href="inclusao.html"> //Inclusão</a>
      <a href="programacao.html"> //Programação</a>
      <a href="panoramatecnologia.html"> //Mercado de Trabalho</a>
  
    </nav>

<button id="btn-menu" onclick="animar()">
    <span class="linha"></span>
    <span class="linha"></span>
    <span class="linha"></span>
</button>

<!-- MOBILE -->

<div class="menu-mobile" id="menu-mobile">

<nav class="navbar-mobile">

        <a href="#contato"> //Contato</a>
        <a href="#conteudos"> //Conteúdos </a>
        <a href="#workshop"> //WorkShop </a>

</nav>
</div>
</div>

</header>
    <!-- FORMULARIO CLIENTES -->

    <?php

    $servername = "sql101.infinityfree.com";
    $username = "if0_36928015";
    $password = "WFuuMbQMRCkytB";
    $dbname = "if0_36928015_programarbd";

//criar conexão

    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];

        $sql = "INSERT INTO informacao(nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";



        if($conn->query($sql) === true){
          echo "<p class='mensagemphp'>Mensagem enviada com sucesso</p>";
        } else{
          echo "Erro" . $sql . "<br>" . $conn->error;
        }
        
      }
      
    $conn->close();    
?>

  <div class="divy"><img src="img/formgif.gif" alt="Mascote Div, um jacaré bebê verde, vestindo um macacão roxo segurando uma folha com a logo convidando o usuário a preencher o formulário."></div>

    <section class="modulo content">
        <section class="home" id="user">
        <div class="wrapper-login">
           <form action="" method="post">
    
            <div class="input-group">
            <div class="input-box">
                    <span class="icon"> <i class="fa-regular fa-user"></i></span>
                    <p> Nome:</p> <input type="text" name="nome" id="" required autocomplete="off">
                
                </div>
    
                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-envelope"></i></span>
                    <p>E-mail:</p>  <input type="email" name="email" id=""requered autocomplete="off">
                </div>
    
                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-phone"></i></span>
                    <p>Telefone:</p> <input type="text"  name="telefone" id="" requered autocomplete="off">

                </div>

               
                <div class="input-box">
                    <span class="icon"><i class="fa-regular fa-comment-dots"></i></span>
                    <p>Envie sua Pergunta:</p> 
                   <div class="quadro"><input type="text" name="mensagem" id="" placeholder="Insira sua pergunta"></div> 


                </div>
               

                <div class="btn-card">
                <input type="submit" value="Enviar" class="btn-card">
                 </div>
            </form> 
        </div>
    </div>
    </div>
    </section>
    </section>
    
 <!-- FOOTER -->
 
  <!--footer-->
  <footer>
    <div class="desenvolvedores">

      <h3>Desenvolvedores</h3>

      <div class="devs">
        <!-- EDU -->
        <a href="https://www.linkedin.com/in/eduarda-souza-3157942b0/" target="_blank" class="fotoLink"><img
            src="img/fotoeduarda.png" alt="A imagem mostra uma pessoa olhando diretamente para a câmera com uma expressão séria. Ela está usando óculos de aro escuro e possui cabelo curto e escuro."></a>
        <!-- NATH -->
        <a href="https://www.linkedin.com/in/nathaliadominguesfreitas/" target="_blank" class="fotoLink"><img
            src="img/fotonathalia.png" alt="A imagem mostra uma pessoa sorrindo levemente. Ela tem cabelo encaracolado e está usando um brinco de argola."></a>
        <!-- MARIANA -->
        <a href="https://www.linkedin.com/in/marianarodriguesprofissional/" target="_blank" class="fotoLink"><img
            src="img/fotomariana.png" alt=" A imagem mostra uma pessoa sorrindo de maneira calorosa para a câmera. Ela tem cabelo encaracolado e curto, com mechas loiras."></a>
        <!-- TAYLAN -->
        <a href="https://www.linkedin.com/in/taylanhahn/" target="_blank" class="fotoLink"><img src="img/fototaylan.png"
          alt=" A imagem mostra uma pessoa sorrindo, usando óculos de sol e uma jaqueta de couro preta. Ele está em um ambiente ao ar livre."></a>
        <!-- MARIANE -->
        <a href="https://www.linkedin.com/in/mariane-martins-b5372b287/" target="_blank" class="fotoLink"><img
            src="img/fotomariane.png" alt="A imagem mostra uma pessoa com cabelo curto e cacheado, usando óculos de armação escura. Ela está vestindo uma camisa vermelha."></a>
        <!-- MICHELE -->
        <a href="https://www.linkedin.com/in/michele-jeske-6772482b3/" target="_blank" class="fotoLink"><img
            src="img/fotomichele.png" alt="A imagem mostra uma pessoa com cabelo longo e escuro, vestindo uma vestido preto com estampa floral branca."></a>
      </div>
    </div>

    <a href="index.html"><img class="logofooter" src="img/programar.png" alt="Duas barras comuns em tom verde com a escrita 'programar' da cor roxa, com um risco ao lado de cor verde."></a>
    <!-- CONTATOS -->
    <div class="contato">
      <h3>Redes Sociais</h3>
      <div class="insta">
        <a href="https://www.instagram.com/programar.code/" target="_blank"><img class="imgInsta"
            src="img/iconeinsta.png" alt="Ícone do instagram em tom branco com fundo roxo."></a>
        <p><span>programar</span>.code</p>
      </div>
      <div class="email">
        <img class="imgEmail" src="img/iconeemail.png" alt="Ícone de um envelope em tom branco com fundo roxo.">
        <p><span>programar863</span>@gmail.com</p>
      </div>
    </div>
  </footer>
  
    <!-- ACESSIBILIDADE -->
  <script src="https://cdn.userway.org/widget.js" data-account="kCDHqw9ltL"></script>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <!-- LIBRAS -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

  <!-- FINAL -->
    
</body>
</html>