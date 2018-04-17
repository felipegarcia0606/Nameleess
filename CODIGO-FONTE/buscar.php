<!DOCTYPE html>
<html lang="pt-br">

<head>
<?= header('content-type: text/html; charset = utf-8');?> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMEQ</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/Professor4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SISTEMEQ<img src="../img/una-logo.jpg"></a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="buscar.php"><i class="fa fa-fw fa-table"></i> Buscar</a>
                        </li>
                        <li>
                            <a href="emprestar.php"><i class="fa fa-fw fa-edit"></i> Empréstimo</a>
                        </li>
                        <li>
                            <a href="devolver.php"><i class="fa fa-fw fa-archive"></i> Devolução</a>
                        </li>
                        <li>
                            <a href="Equipamentos.php"><i class="fa fa-fw fa-hdd-o"></i> Equipamentos</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Buscar Equipamentos
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.php">Inicio</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-table"></i> Buscar Equipamentos
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div id="page-wrapper">

                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Equipamento</th>
                                                    <th>Situação</th>
                                                    <th>Disponível</th>
                                                    <th>Data Empréstimo</th>
                                                    <th>Data Devolução</th>
                                                    <th>Ultimo Professor</th>
                                                    <th>Sala</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor4</td>
                                                    <td>323</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor5</td>
                                                    <td>323</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor5</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor6</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor7</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>Impressora</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor6</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Projetor</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor7</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Projetor</td>
                                                    <td>OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor8</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Projetor</td>
                                                    <td>Não Está OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor8</td>
                                                    <td>203</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Projetor</td>
                                                    <td>Não Está OK</td>
                                                    <td>Sim</td>
                                                    <td>25/05/2017</td>
                                                    <td>25/05/2017</td>
                                                    <td>Professor9</td>
                                                    <td>203</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>

                    </div>
                    <!-- /#page-wrapper -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

    </html>
