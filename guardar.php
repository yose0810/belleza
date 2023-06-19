<?php

 $conectar=@mysql_connect('localhost','root','');

 if(!$conectar){
     echo"No se puede conectar con el servidor";
 }else{

       $base=mysql_select_db('nueva');
       if(!$base){
         echo"No se encontro la base de datos";
       }

 }

 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $numero=$_POST['numero'];
 $direccion=$_POST['direccion'];

 $sql="INSERT INTO datos (nombre,correo,numero,direccion) VALUES('$nombre' , '$correo', '$numero' , '$direccion')";                         
 
 $ejecutar=mysql_query($sql);
    if(!$ejecutar){
        echo"hubo algun error";
    }else{
        echo"datos guardados correctamente<br><a href='formulario.html'>volver</a>";
    }

?>