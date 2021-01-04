<?php
include_once 'conexion2.php';

$consulta = "SELECT id, nombre, direccion, particular, movil, correo, notas FROM cliente";

if(isset($_POST['guardar'])){
include_once("conexion2.php");
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$particular=$_POST["particular"];
$movil=$_POST["movil"];
$correo=$_POST["correo"];
$notas=$_POST["notas"];

 
$insertar="INSERT INTO cliente
                (nombre, direccion, particular, movil, correo, notas) VALUES('$nombre','$direccion','$particular','$movil','$correo','$notas')";
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
	<title>Clientes</title>
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

<form class="form-horizontal proyecto-container proyecto-login-form-22 margin-bottom-30" role="form"  method="post" action="cliente.php">
    
     <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
    <a href="juicio.php"> <label for="username" class="control-label fa-label"><i class="fa fa-home" style = "font-size:56px;color:#f19e1d;padding:0px 0px 0px 20px"></i> </label></a>
    <h1><p>Detalle de Clientes</p></h1>
                            <p><br></p>
                                </div>
                   </div>
    </div>
<table width=100%>
    <tr><td>
        <div class="form-group2">
		  <div class="col-xs-12">		            
		      <div class="control-wrapper">
        <h2>  Nombre: </h2> <input type="text" class="form-control"  placeholder="Nombre" name="nombre">
              </div>
            </div>
        </div> 
        <div class="form-group2">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  Direccion: </h2> <input type="text" class="form-control"  placeholder="direccion:" name="direccion">
                  </div>
                </div>
            </div>
    </td>
    <td>
        <center>
<img src="img/usuario.jpg" width="150" st>
</center>
</td>
</tr>
<tr>
<td>


<div class="form-group2">
              <div class="col-xs-6">                   
                  <div class="control-wrapper">        
                        
        <h2>  Tel Particular: </h2> <input type="text" class="form-control"  placeholder="particular" name="particular">
                  </div>
                </div>
            </div>

<div class="form-group2">
          <div class="col-xs-6">                   
              <div class="control-wrapper">
        <h2>  Tel Movil: </h2> <input type="text" class="form-control"  placeholder="movil" name="movil">
              </div>
            </div>
        </div>
<div class="form-group2">
              <div class="col-xs-6">                   
                  <div class="control-wrapper">        
                        
        <h2>  correo: </h2> <input type="text" class="form-control"  placeholder="correo:" name="correo">
                  </div>
                </div>
            </div>

</td>
<td>
<div class="form-group2">
              <div class="col-xs-12">                   
                  <div class="control-wrapper">        
                        
        <h2>  Notas: </h2> <input type="textarea" class="form-control"  placeholder="notas" name="notas">
                  </div>
                </div>
            </div>
</td>






            
        </tr>    

        </table>          
       <p>
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
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Partcular</th>
                                <th>Movil</th>
                                <th>Correo</th>
                                <th>Notas</th>
                                <th>Acciones</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php $resultado = mysqli_query($conexion, $consulta);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["nombre"]; ?></td>
                                <td><?php echo $row["direccion"]; ?></td>
                                <td><?php echo $row["particular"]; ?></td>
                                <td><?php echo $row["movil"]; ?></td>
                                <td><?php echo $row["correo"]; ?></td>
                                <td><?php echo $row["notas"]; ?></td>
                                <td>
 &nbsp;&nbsp;&nbsp;&nbsp;  
<a href ="cliente.php?ide=<?php echo $row["id"]; ?>">  <input type="submit" value="eliminar" name="eliminar" class="btn btn-success"> </a></td>
                                
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
$eliminar="delete from cliente where id='$ide'";
$resultadoe = mysqli_query($conexion, $eliminar);

 
        
     
?>  
    
           
           
           
           
           
           
           
</body> 
</html>

