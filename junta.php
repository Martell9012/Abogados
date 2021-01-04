<?php
include_once 'conexion2.php';

$consulta = "SELECT id, descripcion FROM junta";
if(isset($_POST['guardar']))
{
include_once("conexion2.php");

$descripcion=$_POST["descripcion"];

    
$insertar="INSERT INTO junta
                (descripcion) VALUES('$descripcion')";
$resultado = mysqli_query($conexion, $insertar);

    if($resultado){
echo " Datos insertados";
    }else{
        echo "Datos NO insertados";

    }
}
?>
<!DOCTYPE html>
<head>
	<title>Juntas</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="estilos/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="estilos/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="estilos/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="estilos/estilo.css" rel="stylesheet" type="text/css">
</head>

<body class="proyecto-bg-gray">
<form class="form-horizontal proyecto-container proyecto-login-form-22 margin-bottom-30" role="form"  method="post" action="junta.php">
     <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	
                       <a href="juicio.php"> <label for="username" class="control-label fa-label"><i class="fa fa-home" style = "font-size:56px;color:#f19e1d;padding:0px 0px 0px 20px"></i> </label></a> <h1><p>Detalle de Juntas</p></h1>
   <h2>  Junta: </h2> <input type="text" class="form-control"  placeholder="Descripcion:" name="descripcion">
    <p><br></p>
                                </div>
                   </div>
    </div>   
		       <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
      <input type="submit" value="Guardar datos" name="guardar" class="btn btn-success">
    </form>
                   </div>
                   </div>
    </div>
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Junta</th>
                                <th>Acciones</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php $resultado = mysqli_query($conexion, $consulta);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["descripcion"]; ?></td>
                                <td>
   
<a href ="junta.php?ide=<?php echo $row["id"]; ?>"> <input type="submit" value="eliminar" name="eliminar" class="btn btn-success"> </a></td>     
                            </tr>
                                <?php } mysqli_free_result($resultado);?>                    
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>   
         <?php
error_reporting(0);
include("conexion.php");
$ide=$_GET['ide'];
$eliminar="delete from junta where id='$ide'";
$resultadoe = mysqli_query($conexion, $eliminar);
/*header('location:cat2.php');*/
?>  
          
</body> 
</html>