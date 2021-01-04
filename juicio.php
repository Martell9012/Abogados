<?php
include_once 'conexion2.php';

$consulta = "SELECT id, cliente, demandado, junta, expediente, apertura, conclucion,recomendado,notas FROM juicio ";


$reporte = "SELECT j.id, c.nombre as cliente, d.nombre as demandado, ju.descripcion as junta, j.expediente, j.apertura, j.conclucion,j.recomendado,j.notas 
FROM juicio j, cliente c, demandado d, junta ju
where c.id=j.cliente and d.id=j.demandado  and ju.id=j.junta";



/*$reporte = "select j.id, c.nombre as cliente, d.nombre as demandado, ju.descripcion as junta, j.expediente,j.apertura,j.conclucion,j.recomendado,j.notas
from cliente c, demandado d, junta ju, junta j
where j.id=c.id and j.id=d.id and j.id=ju.id";*/

if(isset($_POST['guardar'])){
include_once("conexion2.php");
$cliente=$_POST["cliente"];
$demandado=$_POST["demandado"];
$junta=$_POST["junta"];
$expediente=$_POST["expediente"];
$apertura=$_POST["apertura"];
$conclucion=$_POST["conclucion"];
$recomendado=$_POST["recomendado"];
$notas=$_POST["notas"];


$insertar="INSERT INTO juicio
                (cliente,demandado, junta, expediente, apertura, conclucion,recomendado,notas) VALUES('$cliente','$demandado','$junta','$expediente','$apertura','$conclucion','$recomendado','$notas')";
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
	<title>Nuevo Juicio</title>
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

<form class="form-horizontal proyecto-container proyecto-login-form-22 margin-bottom-30" role="form"  method="post" action="juicio.php">

    
     <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
    <a href="index.php"> <label for="username" class="control-label fa-label"><i class="fa fa-unlock" style = "font-size:56px;color:#f19e1d;padding:0px 0px 0px 20px"></i> </label></a>
    <h1><p>Nuevo Juicio</p></h1>
                            <p><br></p>
                            <a class="btn btn-primary" href="cliente.php"  style="width: 10%;"> Clientes </a><a class="btn btn-danger" href="demandado.php"  style="width: 10%;"> Demandados </a>
                            <a class="btn btn-warning" href="junta.php"  style="width: 10%;"> Juntas </a>
                            <a class="btn btn-info" href="audiencia.php"  style="width: 10%;"> Audiencias </a>
                            <a class="btn btn-info" href="historial.php"  style="width: 10%;"> Historial </a>
                                </div>
                   </div>
    </div>
<table width=100%>
    <tr>
                    <td >
            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">                    
<h2>  Cliente: </h2> 
<?php
require 'conexion2.php';
$consulta3 = "SELECT id, nombre FROM cliente";
$sql_s3 = mysqli_query($conexion, $consulta3);
echo "<select name='cliente' class='form-control' value=''>";
echo "<option value=''>seleccione</option>";
while($filass=mysqli_fetch_assoc($sql_s3)){
echo"<option value='".$filass['id']."'>".$filass['nombre']."</option>";
}
echo"</select>";
?> 
                    </div>
                </div>
            </div>       
            </td>  
        
                    <td >
            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">                    
<h2>  Demandado    : </h2> 
<?php
require 'conexion2.php';
$consulta4 = "SELECT id, nombre FROM demandado";
$sql_s4 = mysqli_query($conexion, $consulta4);
echo "<select name='demandado' class='form-control' value=''>";
echo "<option value=''>seleccione</option>";
while($filass=mysqli_fetch_assoc($sql_s4)){
echo"<option value='".$filass['id']."'>".$filass['nombre']."</option>";
}
echo"</select>";
?> 
                    </div>
                </div>
            </div>       
            </td>  
                    <td >
            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">                    
<h2>  Junta: </h2> 
<?php
require 'conexion2.php';
$consulta5 = "SELECT id,descripcion FROM junta";
$sql_s5 = mysqli_query($conexion, $consulta5);
echo "<select name='junta' class='form-control' value=''>";
echo "<option value=''>seleccione</option>";
while($filass=mysqli_fetch_assoc($sql_s5)){
echo"<option value='".$filass['id']."'>".$filass['descripcion']."</option>";
}
echo"</select>";
?> 
                    </div>
                </div>
            </div>       
            </td>  
        </tr>
    </table>
    <hr width=80% align="center">
    <table width=100%>
        <tr>
              <td >

            <div class="form-group">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  expediente: </h2> <br><input type="text" class="form-control"  placeholder="expediente" name="expediente">
                  </div>
                </div>
            </div>



            </td>  
            
            <td >
            <div class="form-group">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  apertura: </h2> <br><input type="text" class="form-control"  placeholder="apertura" name="apertura">
                  </div>
                </div>
            </div>


            </td>  
            <td>

            <div class="form-group">
		      <div class="col-xs-12">		            
		          <div class="control-wrapper">        
                        
        <h2>  conclucion: </h2> <br><input type="text" class="form-control"  placeholder="conclucion" name="conclucion">
                  </div>
                </div>
            </div>

        </td>
                    <td>

            <div class="form-group">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  recomendado: </h2> <br><input type="text" class="form-control"  placeholder="recomendado" name="recomendado">
                  </div>
                </div>
            </div>
            
        </td>
         <td>

            <div class="form-group">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  notas: </h2> <br><input type="text" class="form-control"  placeholder="notas" name="notas">
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
                                <th>Cliente</th>
                                <th>Demandado</th>
                                <th>Junta</th>
                                <th>Expediente</th>
                                <th>Apertura</th>
                                <th>Conclusion</th>
                                <th>Recomendado</th>
                                <th>notas</th>
                                <th>Acciones</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php $resultado = mysqli_query($conexion, $reporte);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["cliente"]; ?></td>
                                <td><?php echo $row["demandado"]; ?></td>
                                <td><?php echo $row["junta"]; ?></td>
                                <td><?php echo $row["expediente"]; ?></td>
                                <td><?php echo $row["apertura"]; ?></td>
                                <td><?php echo $row["conclucion"]; ?></td>
                                <td><?php echo $row["recomendado"]; ?></td>
                                <td><?php echo $row["notas"]; ?></td>

                                <td>
 &nbsp;&nbsp;&nbsp;&nbsp;  
<a href ="juicio.php?ide=<?php echo $row["id"]; ?>">  <input type="submit" value="eliminar" name="eliminar" class="btn btn-success"> </a></td>
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
$eliminar="delete from juicio where id='$ide'";
$resultadoe = mysqli_query($conexion, $eliminar);
    
?>  
    
   
           
</body> 
</html>

