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
                            <li ><a href="fornecedor.php">Fornecedor</a></li>
                            <li class="active" ><a href="licitacao.php">Licitação</a></li>
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
                            <li class="active"><a href="licitacao.php.php"><i class="icon-plus"></i> Cadastro</a></li>
                            <li><a href="../view/listar_licitacao.php"><i class="icon-search"></i> Localizar</a></li>
                        </ul>
                    </div>

                    <div class="span10">
                        <br>
                        <ul class="breadcrumb">
                            <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                            <li><a href="licitacao.php">Licitação</a></li>
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
                        <h3> Cadastro de Licitação</h3>
                        <hr>
                        <form  method=POST action="../model/licitacao_model.php">
                            <div class="tab-content">
                                <div class="tab-pane active" id="cadastro">
                                    <div class="span5">

                                        <div class="control-group">
                                            <label class="control-label" for="fornecedor_licitacao">FORNECEDOR:</label>
                                            <div class="controls">
                                                <input type="text" id="fornecedor_licitacao" name="fornecedor_licitacao" class="input-xlarge" required="">
                                            </div>

                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="data_homologacao_licitacao">DATA HOLOGAÇÃO:</label>
                                            <div class="controls">
                                                <input type="date" id="data_homologacao_licitacao" name="data_homologacao_licitacao" class="input-medium" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="valor_licitacao">VALOR LICITAÇÃO:</label>
                                            <div class="controls">
                                                <input type="text" id="valor_licitacao" name="valor_licitacao" class="input-medium" required="">
                                            </div>

                                        </div>

                                    </div><!--Final Spam5-->

                                    <div class="span5">                                                                
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <label class="control-label" for="id_insumo_licitacao" >INSUMO:</label>
                                        <select id="id_insumo_licitacao" name="id_insumo_licitacao" class="input-medium" required="">
                                            <option value="1">ATIVO</option>
                                            <option value="0">DESATIVADO</option>                                        
                                        </select>  
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <label class="control-label" for="departamento_licitacao" >DEPARTAMENTO:</label>
                                        <select id="departamento_licitacao" name="departamento_licitacao" class="input-xlarge" required="">
                                            <option value="1">ATIVO</option>
                                            <option value="0">DESATIVADO</option>                                        
                                        </select>  


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
