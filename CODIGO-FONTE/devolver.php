<?php require_once('../php/emprestimo.php'); ?>


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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                <a class="navbar-brand" href="index.php">SISTEMEQ</a>
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
                    <li>
                        <a href="buscar.php"><i class="fa fa-fw fa-table"></i> Buscar</a>
                    </li>
                    <li>
                        <a href="emprestar.php"><i class="fa fa-fw fa-edit"></i> Empréstimo</a>
                    </li>
                    <li class="active">
                        <a href="devolver.php"><i class="fa fa-fw fa-archive"></i> Devolução</a>
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
                            Devolução
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-archive"></i> Devolução
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-12">
                        <h1>Dados do Professor</h1>

                        <form role="form">

                            <fieldset disabled>

                                 <div class="form-group col-md-6">
                                    <label for="disabledSelect">Matrícula</label>
                                    <input class="form-control" id="matricula" name="matricula" type="text" placeholder="Matrícula" disabled value="<?php echo $MATRICULA?>" >

                                    <label for="disabledSelect">Nome</label>
                                    <input class="form-control" id="Nome" name="nome" type="text" placeholder="Nome" disabled value="<?php echo $nome?>">

                                    <label for="disabledSelect">Situacao</label>
                                    <input class="form-control" id="situacao" name="situacao" type="text" placeholder="Disciplina" disabled value = "<?php 
                                    if($situacao ==0){
                                        echo "ok";
                                    }
                                    else {
                                        echo "bloqueado";
                                    }
                                    ?>">
                                </div>
                                
                            </fieldset>

                        </form>

                    </div>
                    <div class="col-lg-12">

                        <h1>Dados dos Equipamentos</h1>

                       <form role="form" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Equipamento</label>
                                    <select id="tipo_equipamento"  class="form-control" required>
                                        <option value='0' id="op_vazio"></option>
                                        <?php
                                        $query = "SELECT * from Equipamento";

                                        $result = mysqli_query($con, $query);


                                        while($fetch = mysqli_fetch_row($result)){
                                            echo "<option>". $fetch[1]. "</option>";

                                        }
                                        ?>
                                    </select>

                                    <div class="form-group">
                                        <label>Tag</label>

                                        <select id="Tag" class="form-control" required>

                                        </select>
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sala</label>

                                    <select id="Sala" class="form-control" required>
                                        <option ></option>
                                        <?php 
                                        $Sala = "SELECT * from Sala";

                                        $result = mysqli_query($con, $Sala);

                                        while($fetch = mysqli_fetch_row($result)){
                                            echo "<option>". $fetch[1]."</option>";
                                        }

                                        ?>
                                    </select>
                                </div>                    
                            </div>

                            <button type="submit" class="btn btn-default" id="salvar">Salvar</button>
                            <button type="reset" class="btn btn-default">Resetar</button>

                        </form>

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
