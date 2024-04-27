<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Combustivel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Combustivel">
        <meta name="author" content="Rayan">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">        
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Combustível</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.php">Início</a></li>
                            <li ><a href="view/veiculos.php">Veículo</a></li>
                            <li ><a href="view/fornecedor.php">Fornecedor</a></li>
                            <li ><a href="view/licitacao.php">Licitação</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->

                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 80px;">
            <div class="row-fluid">
                <div class="span2">
                   
                    <br>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="index.html"><img src="img/dashboard.png"> Dashboard</a>
                        </li>
                        <li><a href="faq.html"><img src="img/faq.png"> Sistema de Faq</a></li>
                        <li><a href="comprar.html"><img src="img/comprar.png"> Comprar produtos</a></li>
                        <li><a href="carrinho.html"><img src="img/carrinho2.png"> Carrinho de Compras</a></li>
                        <li><a href="login.html"><img src="img/sair.png"> Sair</a></li>
                    </ul>
                </div>
                <div class="span10">
                    <h1>Dashboard</h1>

                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="thumbnails">
                                <li class="span4">
                                    <div class="thumbnail">                
                                        <div class="caption">
                                            <h3>Licitações </h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
                                            <h4>R$ 230,00 <span style="font-size: 11px;">ou 10X de R$ 23,00</span></h4>
                                            <p><a href="#" class="btn btn-info"><i class="icon-shopping-cart icon-white"></i> Comprar</a> <a href="#" class="btn">Ver Detalhes &rarr;</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span4">
                                    <div class="thumbnail">
                                        <div class="caption">
                                            <h3>Movimentações</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
                                            <h4>R$ 230,00 <span style="font-size: 11px;">ou 10X de R$ 23,00</span></h4>
                                            <p><a href="#" class="btn btn-info"><i class="icon-shopping-cart icon-white"></i> Comprar</a> <a href="#" class="btn">Ver Detalhes &rarr;</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span4">
                                    <div class="thumbnail">                 
                                        <div class="caption">
                                            <h3>Combustível Disponível</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
                                            <h4>R$ 230,00 <span style="font-size: 11px;">ou 10X de R$ 23,00</span></h4>
                                            <p><a href="#" class="btn btn-info"><i class="icon-shopping-cart icon-white"></i> Comprar</a> <a href="#" class="btn">Ver Detalhes &rarr;</a></p>
                                        </div>
                                    </div>
                                </li>
                           
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <hr>

            <footer>
                <p><center>&copy;Todos os direitos reservados</center></p>
            </footer>

        </div> <!-- /container -->

        <!-- Arquivos Javascripts
        ================================================== -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            $(function ()
            {
                $("#meu-carrinho").popover();
            });
        </script>

    </body>
</html>




