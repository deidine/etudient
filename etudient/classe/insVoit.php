²<?php
include "../database/connection.php";
$codeCl=$_POST['codeCl'];
$codeFil=$_POST['codeFil'];
$nom=$_POST['nom'];
$numTab=$_POST['numTab'];
$sql="INSERT INTO `classe` (codeCl,nom,numtab,codeFil) VALUES ($codeCl,'$nom',$codeFil,$numTab)";
$res=mysqli_query($con,$sql);
if($res){
    header("location:enregistrer.php");
}
else echo "<h1>numero du voiture doit etre 8 carachteur رقم الشاحنة يجب أن يكون 8 أرقام";

?>


