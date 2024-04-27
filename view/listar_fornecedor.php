
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
                <br>   <br>
                <div class="span12">
                    <div class="span2">
                        <h3>Menu</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <li ><a href="fornecedor.php"><i class="icon-plus"></i> Cadastro</a></li>
                            <li class="active"><a href="../view/listar_fornecedor.php"><i class="icon-search"></i> Localizar</a></li>

                        </ul>
                    </div>
                    <div class="span10">
                        <br>
                        <ul class="breadcrumb">
                            <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                            <li><a href="fornecedor.php">Fornecedor</a><span class="divider">/</span></li>
                            <li><a href="listar_fornecedor.php">Localizar</a></span></li>
                        </ul>
                        <h3>Localizar Fornecedores</h3>
                        <hr>

                        <form class="form-search" id="localizar" name="localizar" method="get" action="listar_veiculos.php">
                            <div class="input-append">
                                <input name="filtrar" type="text" id="filtrar"  class="input-xlarge search-query" placeholder="Nome do Fornecedor" />
                                <button class="btn" type="submit" id="button" value="localizar"><i class="icon-search"></i> Localizar</button>
                                <div class="input-append">
                                </div>
                            </div>
                        </form>                        

                        <div id="conteudo"> 
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th style="width: 40%"><center>Nome Fantasia</center></th>                               
                                    <th><center>Endereço</center></th>
                                    <th><center>Bairro</center></th>
                                    <th><center>Cidade</center></th>                                  
                                    <th><center>Fone</center></th>
                                    <th><center>Celular</center></th>
                                    <th><center>Contato</center></th>
                                    <th><center>E-mail</center></th>
                                    <th><center>Opções</center></th>

                                </tr>
                                <!--Inicio codigo php-->

                                <?php
                                extract($_GET);
                                if (empty($filtrar)) {
                                    $filtrar = '';
                                } else {
                                    $filtrar = $filtrar;
                                }

                                include ("../model/conexao_db.php");
                                conectar($server, $user, $senha, $db); // iner join para imprimir o nome do fornecedor e tipo

                                if (isset($_GET["p"])) {
                                    $p = $_GET["p"];
                                } else {
                                    $p = 1;
                                }
                                // Defina aqui a quantidade máxima de registros por página.
                                $qnt = 10; // O sistema calcula o início da seleção calculando:(página atual * quantidade por página) - quantidade por página
                                $inicio = ($p * $qnt) - $qnt;

                                $consulta = "SELECT * FROM fornecedor  WHERE nome_fantasia_fornecedor like '" . $filtrar . "%'
                                            ORDER BY nome_fantasia_fornecedor ASC
                                            LIMIT $inicio, $qnt ;";



                                $resultado = mysql_query($consulta) or die("Nao foi possivel realizar a consulta!<br>" . mysql_error());

                                $cor = '#2e82ff'; // definição de cor para loop de cor
                                while ($linhas = mysql_fetch_array($resultado)) {// Abrindo loop, Enquanto tiver resultado imprima.
                                    // Faz uma nova seleção no banco de dados, desta vez sem LIMIT, 
                                    // para pegarmos o número total de registros
                                    $sql_select_all = "
                                            SELECT * FROM fornecedor 
                                            WHERE nome_fantasia_fornecedor LIKE '" . $filtrar . "%'";

                                    // Executa o query da seleção acimas
                                    $sql_query_all = mysql_query($sql_select_all);
                                    // Gera uma variável com o número total de registros no banco de dados 
                                    $total_registros = mysql_num_rows($sql_query_all);
                                    // Gera outra variável, desta vez com o número de páginas que será precisa. 
                                    // O comando ceil() arredonda "para cima" o valor 
                                    $pags = ceil($total_registros / $qnt);



                                    /* Imprimindo array */ echo " 
 <td ><center>" . $linhas["nome_fantasia_fornecedor"] . "</center></td>
 <td><center>" . $linhas["endereco_fornecedor"] . "</center></td>
 <td ><center>" . $linhas["bairro_fornecedor"] . "</center></td>
 <td ><center>" . $linhas["cidade_fornecedor"] . "</center></td> 
 <td ><center>" . $linhas["fone_fornecedor"] . "</center></td> 
 <td ><center>" . $linhas["celular_fornecedor"] . "</center></td> 
 <td ><center>" . $linhas["contato_fornecedor"] . "</center></td> 
 <td ><center>" . $linhas["email_fornecedor"] . "</center></td>                                        
                                             ";
                                    ?>  
                                    <td ><a href=alterar_produto.php?id_produto><i class="icon-home"></i></a></td>
                                    <tr>                               
                                        <?php
                                    }//fechando loop 
                                    ?>



                            </table><!--fecha table-->
                            <ul class = "pager">

                                <?php
                                $anterior = $p - 1;
                                $proximo = $p + 1;

                                if ($p > 1) {

                                    echo " <li><a href='?p=$anterior&filtrar=$filtrar'>&larr; Anterior </a></li> ";
                                }if ($p > 1) {
                                    echo "<span class='label label-info'>Página n° $p de $pags</span>";
                                }
                                if ($p < $pags) {

                                    echo " <li><a href='?p=$proximo&filtrar=$filtrar'>Próximo &rarr;</a></li>";
                                }
                                ?>


                            </ul>
                        </div>
                        <hr>
                    </div><!-- Final conteudo-->
                </div>
            </div>           

            <div class="footer">
                <center><p>&copy;</p></center>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

    </body>
</html>