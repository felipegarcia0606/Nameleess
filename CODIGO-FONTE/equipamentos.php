<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMEQ</title>

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
 
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">


                </body>

                </html>
            
            
            <?php 
require_once('conecta_bd.php');

$objBd = new bd();
$objBd->conecta_mysqli();

$query = "SELECT * from Equipamento";


    $result = mysqli_query($query);
    while($fetch = mysqli_fetch_row($result)){
        echo "<p>". $fetch[0] . "-" . $fetch[1] . "-" . $fetch[2]. "-" . $fetch[3] . "</p>";
    }


	

// if($retorno)
// {

	// $equip = mysqli_fetch_array($retorno);
	


// 	if(isset($equip['tag']))
// 	{
// 		echo '<pre>';
// 		var_dump($equip);

// 		echo '</pre>';
// 		echo $nome = $equip[1];
// 		echo $id = $equip['id'];
		
// 	}
// 	else
// 	{
// 		echo $nome = 'sem equipamento';
		
// 	}

// }
// else
// {
// 	echo $erro = "erro na execução da consulta, entre em contato com o admin do site";
// }





?>
