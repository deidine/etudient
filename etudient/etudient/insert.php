<?php
include "../auth.php";

include "../database/connection.php";
$num=$_POST['numero'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dep=$_POST['dep'];
 $sql=$con->prepare("INSERT INTO `etudient`(numero,nom,prenom,codeDep) VALUES (?,?,?,?)");
 $sql->bind_param('issi',$num,$nom,$prenom,$dep);
 $sql->execute();
 $sql->close();
 
 
 if($sql){
     header("location:enregistrer.php");
 }
 else echo "error";

 ?>

