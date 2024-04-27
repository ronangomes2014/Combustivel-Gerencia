
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Combustível</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="projeto para o Curso de Bootstrap">
        <meta name="author" content="Andre Andrade">

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
                            <li class="active"><a href="veiculos.php">Veículo</a></li>
                            <li><a href="fornecedor.php">Fornecedor</a></li>
                            <li ><a href="licitacao.php">Licitação</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->

                </div>
            </div>
        </div>

        <div class="container">



            <!-- Example row of columns -->
            <div class="row-fluid">
                <br>  <br>  
                <div class="span12">

                    <div class="span2">
                        <h3>Menu</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="veiculos.php"><i class="icon-plus"></i> Cadastro</a></li>
                            <li><a href="../view/listar_veiculos.php"><i class="icon-search"></i> Localizar</a></li>
                        </ul>
                    </div>

                    <div class="span10">

                        <br>
                        <ul class="breadcrumb">
                            <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                            <li><a href="veiculos.php">Veículos</a></li>
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
                        <h3> Cadastro de Veículos</h3>
                        <hr>
                        <form  method=POST action="../model/veiculo_model.php">
                            <div class="tab-content">
                                <div class="tab-pane active" id="cadastro">
                                    <div class="span5">
                                        <label class="control-label" for="situacao_veiculo" >SITUAÇÃO:</label>
                                        <select id="situacao_veiculo" name="situacao_veiculo" class="input-medium" required="">
                                            <option value="1">ATIVO</option>
                                            <option value="0">DESATIVADO</option>                                        
                                        </select>  


                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="fabricante_veiculo">FABRICANTE:</label>
                                            <div class="controls">
                                                <input type="text" id="fabricante_veiculo" name="fabricante_veiculo" class="input-medium" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="modelo_veiculo">MODELO:</label>
                                            <div class="controls">
                                                <input type="text" id="modelo_veiculo" name="modelo_veiculo" class="input-medium" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="ano_veiculo">ANO:</label>
                                            <div class="controls">
                                                <input type="text" id="ano_veiculo" name="ano_veiculo" class="input-mini" required="">
                                            </div>

                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="placa_veiculo">PLACA:</label>
                                            <div class="controls">
                                                <input type="text" id="placa_veiculo" name="placa_veiculo" class="input-medium" required="">
                                            </div>

                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- -->

                                        <div class="control-group">
                                            <label class="control-label" for="chassi_veiculo">CHASSI:</label>
                                            <div class="controls">
                                                <input type="number" id="chassi_veiculo" name="chassi_veiculo" class="input-medium" required="">
                                            </div>
                                        </div> 


                                    </div><!--Final Spam5-->

                                    <div class="span5">
                                        <div class="control-group">
                                            <label class="control-label" for="kl_veiculo">K/L:</label>
                                            <div class="controls">
                                                <input type="text" id="kl_veiculo" name="kl_veiculo" class="input-mini" required="">
                                            </div>
                                        </div>

                                        <!-------------------------------------------------------------------------------------------------------------- --> 


                                        <div class="control-group">
                                            <label class="control-label" for="">TIPO DE COMBUSTÍVEL:</label>
                                            <div class="controls">
                                                <select id="id_insumo_veiculo" name="id_insumo_veiculo" required="">
                                                    <option value="">SELECIONE</option>
                                                    <?php
                                                    $conexao = mysql_connect('localhost', 'root', '') or die("<h1>Conexao com o servidor falhou!</h1><br>" . mysql_error());
                                                    $banco = mysql_select_db('combustivel') or die("<h1>Erro ao selecionar a base de dados!</h1><br>" . mysql_error());
                                                    $SQL = "SELECT * FROM isumos ORDER BY nome_insumo ASC";
                                                    $query = mysql_query($SQL, $conexao);
                                                    while ($exibir = mysql_fetch_array($query)) {
                                                        ?>
                                                        <option value="<?php echo $exibir["id_insumo"]; ?>"><?php echo $exibir["nome_insumo"]; ?></option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>



                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="proprietario_veiculo">PROPRIETÁRIO:</label>
                                            <div class="controls">
                                                <input type="text" id="proprietario_veiculo" name="proprietario_veiculo" class="input-medium" required="">
                                            </div>
                                        </div>
                                        <!-------------------------------------------------------------------------------------------------------------- --> 
                                        <div class="control-group">
                                            <label class="control-label" for="tanque_veiculo">CAPACIDADE DO TANQUE / LITRO:</label>
                                            <div class="controls">
                                                <input type="number" id="tanque_veiculo" name="tanque_veiculo" class="input-mini" required="">
                                            </div>
                                        </div>                                     
                                        <!-------------------------------------------------------------------------------------------------------------- -->

                                        <div class="control-group">
                                            <label class="control-label" for="id_lotacao_veiculo">LOTAÇÃO:</label>
                                            <div class="controls">
                                                <select id="id_lotacao_veiculo" name="id_lotacao_veiculo" required="">
                                                    <option value="">SELECIONE</option>
                                                    <?php
                                                    $conexao = mysql_connect('localhost', 'root', '') or die("<h1>Conexao com o servidor falhou!</h1><br>" . mysql_error());
                                                    $banco = mysql_select_db('combustivel') or die("<h1>Erro ao selecionar a base de dados!</h1><br>" . mysql_error());
                                                    $SQL = "SELECT * FROM lotacao ORDER BY nome_lotacao ASC";
                                                    $query = mysql_query($SQL, $conexao);
                                                    while ($exibir = mysql_fetch_array($query)) {
                                                        ?>
                                                        <option value="<?php echo $exibir["id_lotacao"]; ?>"><?php echo $exibir["nome_lotacao"]; ?></option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>


                                        <!-------------------------------------------------------------------------------------------------------------- --> 


                                        <label class="control-label" for="tipo_veiculo" >TIPO:</label>
                                        <select id="tipo_veiculo" name="tipo_veiculo" class="input-medium" required="">
                                            <option value="">SELECIONE</option>
                                            <option value="AUTOMOVEL">AUTOMOVEL</option>
                                            <option value="CAMINHONETE">CAMINHONETE</option> 
                                            <option value="CAMINHONETE C.ABERTA">CAMINHONETE C.ABERTA</option> 
                                            <option value="LANCHA">LANCHA</option> 
                                            <option value="MICROONIBUS">MICROONIBUS</option> 
                                            <option value="MONOCICLO">MONOCICLO</option> 
                                            <option value="MOTO">MOTO</option> 
                                            <option value="MOTOCICLETA"> MOTOCICLETA</option> 
                                            <option value="MOTOCICLO"> MOTOCICLO</option> 
                                            <option value="PA ENCHADEIRA">PA ENCHADEIRA</option> 
                                            <option value="PA ENCHADEIRA">PASS/AUTOMOVEL</option> 
                                            <option value="PASSAGEIRO">PASSAGEIRO</option> 
                                            <option value="PASSEIO">PASSEIO</option> 
                                            <option value="PATROL"> PATROL</option> 
                                            <option value="RETRO ESCAVADEIRA">RETRO ESCAVADEIRA</option> 
                                            <option value="TRATOR">TRATOR</option>                                             
                                        </select>



                                    </div>  <!--Final Span5-->                                
                                </div><!--Final Active Panel cadastro-->



                            </div>
                            <center>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    <button type="reset" class="btn">Cancelar</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="footer">
                    <center><p>&copy; Combustivel</p></center>
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
