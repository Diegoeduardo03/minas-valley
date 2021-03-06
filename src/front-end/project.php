<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Projeto</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body, html {
  height: 100%;
}

.menu {
  display: none;
}

</style>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="../../img/logo/2.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#redes">Nossas redes</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='src/front-end/perfil.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='src/back-end/logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
            }else{

              echo "<li><a href='src/front-end/signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='src/front-end/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>


<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-row-padding" id="about" align:center>
        <div class="w3-col l4 12""><br><br><br>
          <h1>Nu Pagamentos S.A.</h1><br>
          <h4>É possível

          No Brasil, são cobradas as tarifas e os juros mais altos do mundo pelos piores serviços bancários. E é neste cenário que o Nubank surgiu para resolver a vida financeira das pessoas com transparência, segurança e simplicidade.<br>
          
          Desde o dia 1, o Nubank mostra que é possível fazer a diferença. É possível tratar as pessoas como humanos, não números, e oferecer um serviço justo, descomplicado e transparente.<br>
          
          No fim das contas, o que nós queremos é que todas as pessoas possam reinventar suas vidas financeiras<br>
          
          Por isso, não temos pegadinhas, enrolação ou letras miúdas.</h4>
        </div>

        <div class="w3-col l8 12"><br><br><br>
          <img src="../../img/Projects/Nubank/Cartao.png" class="w3-image" style="width:40%;">
        </div>
    </div>

  <div class="w3-container w3-padding-32" id="Descricao">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Descrição</h3>
  </div>

  <div style="text-align:center">
          <h4>A fintech Nubank anunciou no começo de julho que atingiu a marca de 10 milhões de clientes no Brasil, entre possuidores de contas digitais e cartões de crédito.<br><br>
          Fundada por David Vélez, Cristina Junqueira, Edward Wible em 2013, o Nubank já recebeu investimentos por cerca de US$ 420 milhões em sete rodadas. Graças a esse rápido crescimento, o valor de mercado aproximado da startup alcançou US$ 4 bilhões.<br><br>
          Em 2019, a fintech iniciou sua expansão na América Latina, primeiro para o México, e, em junho também para a Argentina. Sempre neste ano, o Nubank foi eleito a empresa mais inovadora da América Latina pela revista “Fast Company”.<br><br>
          O sucesso foi tamanho, que o Nubank chegou a ter uma lista de espera para clientes de até três meses de duração. Entretanto, no começo do mês, junto com o novo número de clientes, a empresa também anunciou que encerrou a lista de espera para a liberação dos serviços da conta digital. Desta forma, os novos clientes passaram a receber na hora o acesso à NuConta após a solicitação.<br><br>
          Primeiros passos<br><br>
          A criação do Nubank é ligada a forte vontade do colombiano David Vélez de criar sua própria fintech. Graduado na Universidade de Stanford, e com passagens em bancos de investimentos renomados, como Goldman Sachs e Morgan Stanley, Vélez, em conjunto com Cristina Junqueira e Edward Wible, fundou a startup em 2013.<br>
          Na época, o escritório ficava localizado no bairro Brooklin em São Paulo. Logo ocorreu o lançamento do primeiro produto da startup: o cartão de crédito sem anuidade, com gerenciamento 100% digital por aplicativo em smartphones. Foi uma revolução para o mercado bancário brasileiro, altamente concentrado e com custos muito altos para os correntistas.<br><br>
          Saiba mais – Nubank abre escritório na Argentina e continua expansão na AL<br><br>
          O sucesso foi imediato, e pouco depois de um ano do lançamento foi necessário que a empresa se mudasse para um local maior: o escritório já não conseguiria abrigar os 300 funcionários. Foi assim que a fintech passou para a Avenida Brigadeiro Luis Antônio.<br><br>
          Em 2016, sempre por causa da rápida expansão, o Nubank se mudou mais uma vez, passando no bairro de Pinheiros, e contando com mais de 1.500 colaboradores.<br><br>
          Rápida ascensão<br>
          Assim como o fundador, boa parte do quadro de funcionários do Nubank são estrangeiros. O banco tem colaboradores com mais de 25 nacionalidades, entre eles mexicanos, indianos, canadenses, australianos, americanos e holandeses. Além disso, segundo a própria empresa:<br><br>
          cerca de 30% da equipe faz parte da comunidade LGBTQ;<br>
          cerca de 40% são mulheres.<br>
          Os fundadores da startup mantiveram cargos de liderança na empresa, e hoje ocupam respetivamente as posições de:<br><br>
          David Vélez: CEO<br>
          Edward Wible: CTO<br>
          Cristina Junqueir: vice-presidenta da startup<br>
          Em 2017, a fintech lançou seu programa de benefícios, o Nubank Rewards. No mesmo ano, também anunciou a NuConta, a conta digital atualmente utilizada por mais de 5,5 milhões de brasileiros<br><br>
          O público-alvo da fintech é muito jovem. Aproximadamente 70% dos usuários da Nubank têm menos de 36 anos. Assim, as gerações Y e Z centralizam as atenções da empresa, visto que  possuem maior interação com o ambiente digital do que outras faixas etárias.</h4>
        </div>

 
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Comentários</h1>
   
    <div id="formComentarios">
        Nome: <input type="text" id="campoNome"><br>
        Comentario: <br> <textarea rows="4" cols="30"> </textarea> <input type="text" rows="4" cols="30" id="campoComentario"> <br>
        <button id="btnIncluirComentario">Enviar</button></br>
        <br>

      </div>

     <button id="btnCarregaDados">Carregar Comentarios</button>
    <div id="tela"></div>

    <script src="app.js"></script>
</body>
</html>


<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</footer>

</body>
</html>
