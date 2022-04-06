<?php
include "../database/connection.php";
$id=$_POST['id'];
$codeCl=$_POST['codeCl'];
$codeFil=$_POST['codeFil'];
$nom=$_POST['nom'];
$numTab=$_POST['numTab'];
$sql="UPDATE classe SET nom='$nom',codeCl=$codeCl,numtab=$numTab,codeFil=$codeFil WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "error";

?>
