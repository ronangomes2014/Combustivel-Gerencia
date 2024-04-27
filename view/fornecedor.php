<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Combustivel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Combustivel">
        <meta name="author" content="Rayan">

        <!-- Le styles -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">        
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
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
                            <li ><a href="../index.php">Início</a></li>
                            <li ><a href="veiculos.php">Veículo</a></li>
                            <li class="active"><a href="fornecedor.php">Fornecedor</a></li>
                            <li ><a href="licitacao.php">Licitações</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->

                </div>
            </div>
        </div>

        <div class="container">

            <!-- Example row of columns -->
            <div class="row-fluid">
                <br> <br>
                <div class="span12">
                    <div class="span2">
                        <h3>Menu</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="fornecedor.php"><i class="icon-plus"></i> Cadastro</a></li>
                            <li><a href="../view/listar_fornecedor.php"><i class="icon-search"></i> Localizar</a></li>
                        </ul>
                    </div>

                    <div class="span10">
                        <br>
                        <ul class="breadcrumb">
                            <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                            <li><a href="fornecedor.php">Fornecedor</a></li>
                        </ul>
                        <?php
                        $sinal = isset($_GET['sucesso']);

                        if ($sinal) {
                            echo "<div class='alert alert-success alert-dismissible' role='alert'>
   <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span>
   <span class='sr-only'></span></button><strong><center>Veículo cadastrado com sucesso!</center></strong></div>";
                        }
                        $sinal = isset($_GET['erro']);

                        if ($sinal) {
                            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
   <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span>
   <span class='sr-only'></span></button><strong><center>Erro ao cadastrar o veículo</center></strong></div>";
                        }
                        ?>
                        <h3> Cadastro de Fornecedores</h3>
                        <hr>
                        <form  method=POST action="../model/fornecedor_model.php">
                            <div class="tab-content">
                                <div class="tab-pane active" id="cadastro">
                                    <div class="span5">

                                        <div class="control-group">
                                            <label class="control-label" for="nome_fantasia_fornecedor">NOME FANTASIA :</label>
                                            <div class="controls">
                                                <input type="text" id="nome_fantasia_fornecedor" name="nome_fantasia_fornecedor" class="input-xlarge" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="razao_social_fornecedor">RAZÃO SOCIAL:</label>
                                            <div class="controls">
                                                <input type="text" id="razao_social_fornecedor" name="razao_social_fornecedor" class="input-xlarge" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="cnpj_fornecedor">CNPJ:</label>
                                            <div class="controls">
                                                <input type="text" id="cnpj_fornecedor" name="cnpj_fornecedor" class="input-medium" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="endereco_fornecedor">ENDEREÇO:</label>
                                            <div class="controls">
                                                <input type="text" id="endereco_fornecedor" name="endereco_fornecedor" class="input-xlarge" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="bairro_fornecedor">BAIRRO:</label>
                                            <div class="controls">
                                                <input type="text" id="bairro_fornecedor" name="bairro_fornecedor" class="input-medium" required="">
                                            </div>

                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- -->
                                        <div class="control-group">
                                            <label class="control-label" for="cidade_fornecedor">CIDADE:</label>
                                            <div class="controls">
                                                <input type="text" id="cidade_fornecedor" name="cidade_fornecedor" class="input-xlarge" required="">
                                            </div>
                                        </div> 

                                    </div><!--Final Spam5-->

                                    <div class="span5">                                                                

                                        <div class="control-group">
                                            <label class="control-label" for="cep_fornecedor">CEP:</label>
                                            <div class="controls">
                                                <input type="text" id="cep_fornecedor" name="cep_fornecedor" class="input-medium" required="">
                                            </div>
                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- -->

                                        <div class="control-group">
                                            <label class="control-label" for="fone_fornecedor">FONE:</label>
                                            <div class="controls">
                                                <input type="tel" id="fone_fornecedor" name="fone_fornecedor" class="input-medium" required="">
                                            </div>
                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- --> 

                                        <div class="control-group">
                                            <label class="control-label" for="celular_fornecedor">CELULAR:</label>
                                            <div class="controls">
                                                <input type="tel" id="celular_fornecedor" name="celular_fornecedor" class="input-medium" required="">
                                            </div>
                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- --> 


                                        <div class="control-group">
                                            <label class="control-label" for="email_fornecedor">E-MAIL:</label>
                                            <div class="controls">
                                                <input type="email" id="email_fornecedor" name="email_fornecedor" class="input-xlarge" required="">
                                            </div>
                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------->

                                        <div class="control-group">
                                            <label class="control-label" for="contato_fornecedor">CONTATO:</label>
                                            <div class="controls">
                                                <input type="text" id="contato_fornecedor" name="contato_fornecedor" class="input-xlarge" required="">
                                            </div>
                                        </div>

                                    </div>  <!--Final Span5-->                                
                                </div><!--Final Active Panel cadastro-->
                            </div>
                            <center>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Cadastrar</button>
                                    <button type="reset" class="btn"><i class="icon-remove "></i> Cancelar</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>

                <hr>

                <div class="footer">
                    <center><p>&copy; Combustivel </p></center>
                </div>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>


    </body>
</html>
