<?php
include_once 'conexion2.php';

$consulta = "SELECT id, juicio, fecha, tipo, comentario FROM historial";

if(isset($_POST['guardar'])){
include_once("conexion2.php");
$juicio=$_POST["juicio"];
$fecha=$_POST["fecha"];
$tipo=$_POST["tipo"];
$comentarios=$_POST["comentarios"];

 
$insertar="INSERT INTO historial
                (juicio, fecha, tipo, comentario) VALUES('$juicio','$fecha','$tipo','$comentarios')";
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
	<title>Historial</title>
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

<form class="form-horizontal proyecto-container proyecto-login-form-22 margin-bottom-30" role="form"  method="post" action="historial.php">
    
     <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
    <a href="juicio.php"> <label for="username" class="control-label fa-label"><i class="fa fa-home" style = "font-size:56px;color:#f19e1d;padding:0px 0px 0px 20px"></i> </label></a>
    <h1><p>Detalle de Historial</p></h1>
                            <p><br></p>
                                </div>
                   </div>
    </div>
<table width=100%>
    <tr><td>
            <div class="form-group">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">                    
<h2>  ID de Juicio    : </h2> 
<?php
require 'conexion2.php';
$consulta4 = "SELECT id FROM juicio";
$sql_s4 = mysqli_query($conexion, $consulta4);
echo "<select name='juicio' class='form-control' value=''>";
echo "<option value=''>seleccione</option>";
while($filass=mysqli_fetch_assoc($sql_s4)){
echo"<option value='".$filass['id']."'>".$filass['id']."</option>";
}
echo"</select>";
?> 
                    </div>
                </div>
            </div>     
        </td>
        <td>
            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">        
                        
        <h2>  Fecha: </h2><br> <input type="date" class="form-control"  placeholder="Fecha:" name="fecha">
                  </div>
                </div>
            </div>
        </td>
        <td>
            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">        
                        
        <h2>  Tipo: </h2> <br><input type="text" class="form-control"  placeholder="Tipo" name="tipo">
                  </div>
                </div>
            </div>
        </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
        <td>
        <div class="form-group">
		  <div class="col-xs-12">		            
		      <div class="control-wrapper">
        <h2>  Comentarios: </h2><br> <input type="text" class="form-control"  placeholder="comentarios" name="comentarios">
              </div>
            </div>
        </div>     
        </td>
        
            
        </tr>    

        </table>          
       
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
                                <th>Juicio</th>
                                <th>Fecha</th>
                                <th>Tipo</th>
                                <th>Comentarios</th>
                                <th>Acciones</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php $resultado = mysqli_query($conexion, $consulta);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["juicio"]; ?></td>
                                <td><?php echo $row["fecha"]; ?></td>
                                <td><?php echo $row["tipo"]; ?></td>
                                <td><?php echo $row["comentario"]; ?></td>
                                <td>
 &nbsp;&nbsp;&nbsp;&nbsp;  
<a href ="historial.php?ide=<?php echo $row["id"]; ?>">  <input type="submit" value="eliminar" name="eliminar" class="btn btn-success"> </a></td>
                                
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
include_once("conexion2.php");
$ide=$_GET['ide'];
$eliminar="delete from historial where id='$ide'";
$resultadoe = mysqli_query($conexion, $eliminar);

 
        
     
?>  
    
           
           
           
           
           
           
           
</body> 
</html>

