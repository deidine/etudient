<?php
include "../database/connection.php";
$id=$_POST['id'];
$codeDep=$_POST['codeDep'];
$nom=$_POST['nom'];
$etab=$_POST['etab'];
$sql="UPDATE departement   SET etablissement='$etab',nom='$nom',codeDep=$codeDep WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "error";

?>
