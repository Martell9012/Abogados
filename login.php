<?php 
 //Conexion con la base de datos.
 $conexion= new mysqli("localhost","root", "");
   
 if($conexion->connect_errno){
      echo "Fallo al conectar a MySQL:(". $conexion->connect_errno.")";
 }
 else{
 $conexion->select_db("abogado");
      
 //variables para los cuadros de texto.
 $nombre=$_POST["txtuser"];
 $password=$_POST["txtpass"];

 //Consulta del usuario y el password
 $consulta="SELECT usuario,password,tipo FROM login WHERE usuario='$nombre' and password='$password'";
 
     
if($query= $conexion->query($consulta)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows;
    
 //Si existe el usuario lo manda a pagina de principal
 if($nr == 1){ 
     
// si es admin o profesor lo mandara a diferentes paginas     
     if ($row['tipo']==1){
         
   header ("Location:juicio.php");       
     }else 
         if ($row['tipo']==2){
         header ("Location:juicio.php");
 }  
     
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) { 
               header("Location:index.php"); 
 }  
 }
 else{
 echo $conexion->error;  
 }
}  
?>