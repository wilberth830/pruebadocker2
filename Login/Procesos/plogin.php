<?php 
    $nomcuenta=$_POST['nomCuenta'];
    $clave=md5($_POST['clave']);

    $consulta=$pdo->prepare("SELECT * FROM usuario WHERE NombreCuenta=:nomcuenta AND Clave=:clave");
    $consulta1=$pdo->prepare("SELECT * FROM usuario WHERE Email=:email AND Clave=:clave");

    $consulta->bindParam(":nomcuenta",$nomcuenta);
    $consulta->bindParam(":clave",$clave);

    $consulta1->bindParam(":email",$nomcuenta);
    $consulta1->bindParam(":clave",$clave);

    $consulta->execute();
    $consulta1->execute();
    

    if($consulta->rowCount()>=1){
        echo "<br>bienvenido : ",$nomcuenta;
    }elseif($consulta1->rowCount()>=1){
        echo "<br>bienvenido : ",$nomcuenta;
    }else {
        echo "<br>ERROR los datos no son correctos";
    }