²<?php
include "../database/connection.php";
$nom=$_POST['nom'];
$code=$_POST['numero'];
$codeDep=$_POST['codeDep'];
$sql="INSERT INTO `filliere` (codeFil,nom,codeDep) VALUES ($code,'$nom',$codeDep)";
$res=mysqli_query($con,$sql);
if($res){
    header("location:enregistrer.php");
}
else echo "<h1>numero du voiture doit etre 8 carachteur رقم الشاحنة يجب أن يكون 8 أرقام";

?>


