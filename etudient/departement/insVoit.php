²<?php
include "../database/connection.php";
$codeDep=$_POST['codeDep'];
$nom=$_POST['nom'];
$etab=$_POST['etab'];
$sql="INSERT INTO `departement` (codeDep,nom,etablissement) VALUES ($codeDep,'$nom','$etab')";
$res=mysqli_query($con,$sql);
if($res){
    header("location:enregistrer.php");
}
else echo "<h1>numero du voiture doit etre 8 carachteur رقم الشاحنة يجب أن يكون 8 أرقام";

?>


