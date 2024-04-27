
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Combustivel</title>
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
                            <li ><a href="fornecedor.php">Fornecedor</a></li>
                            <li ><a href="licitacao.php">Licitações</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->

                </div>
            </div>
        </div>

        <div class="container">

            <div class="row-fluid">
                <br><br>
                <div class="span12">
                    <div class="span2">
                        <h3>Menu</h3>
                         <ul class="nav nav-pills nav-stacked">
                            <li ><a href="veiculos.php"><i class="icon-plus"></i> Cadastro</a></li>
                            <li class="active"><a href="../view/listar_veiculos.php"><i class="icon-search"></i> Localizar</a></li>
                        </ul>
                    </div>

                    <div class="span10">
                        <br>
                        <ul class="breadcrumb">
                            <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                            <li><a href="veiculos.php">Veículos</a><span class="divider">/</span></li>
                            <li><a href="listar_veiculos.php">Localizar</a></li>
                        </ul>


                        <h3>Localizar Veículos</h3>
                        <hr>

                        <form class="form-search" id="localizar" name="localizar" method="get" action="listar_veiculos.php">
                            <div class="input-append">
                                <input name="filtrar" type="text" id="filtrar"  class="input-xlarge search-query" placeholder="Nome do Veículo" />
                                <button class="btn" type="submit" id="button" value="localizar"><i class="icon-search"></i> Localizar</button>
                                <div class="input-append">
                                </div>
                            </div>
                        </form>                        

                        <div id="conteudo"> 
                            <table class="table table-bordered table-hover">
                                <tr >
                                    <th>Modelo</th>
                                    <th>Fabricante</th>
                                    <th>Ano</th>
                                    <th>Placa</th>
                                    <th>Lotação</th>
                                    <th>Combustível</th>
                                    <th>Editar</th>

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

                                $consulta = "SELECT veiculos.*,
                                            isumos.nome_insumo 
                                            FROM veiculos
                                            INNER JOIN isumos 
                                            ON id_insumo_veiculo = id_insumo                                         
                                            and veiculos.modelo_veiculo like '" . $filtrar . "%'
                                            ORDER BY modelo_veiculo ASC
                                            LIMIT $inicio, $qnt ;";



                                $resultado = mysql_query($consulta) or die("Nao foi possivel realizar a consulta!<br>" . mysql_error());

                                $cor = '#2e82ff'; // definição de cor para loop de cor
                                while ($linhas = mysql_fetch_array($resultado)) {// Abrindo loop, Enquanto tiver resultado imprima.
                                    // Faz uma nova seleção no banco de dados, desta vez sem LIMIT, 
                                    // para pegarmos o número total de registros
                                    $sql_select_all = "SELECT veiculos.*,isumos.nome_insumo FROM veiculos 
                                             INNER JOIN isumos ON id_insumo_veiculo = id_insumo                                         
                                             and veiculos.modelo_veiculo like '" . $filtrar . "%';";
                                    // Executa o query da seleção acimas
                                    $sql_query_all = mysql_query($sql_select_all);
                                    // Gera uma variável com o número total de registros no banco de dados 
                                    $total_registros = mysql_num_rows($sql_query_all);
                                    // Gera outra variável, desta vez com o número de páginas que será precisa. 
                                    // O comando ceil() arredonda "para cima" o valor 
                                    $pags = ceil($total_registros / $qnt);



                                    /* Imprimindo array */ echo " 
 <td >" . $linhas["modelo_veiculo"] . "</td>
 <td >" . $linhas["fabricante_veiculo"] . "</td>
 <td >" . $linhas["ano_veiculo"] . "</td>
 <td >" . $linhas["placa_veiculo"] . "</td>
 <td >" . $linhas["placa_veiculo"] . "</td>
 <td >" . $linhas["placa_veiculo"] . "</td>  ";
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
                <center><p>&copy; Combustível</p></center>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

    </body>
</html>