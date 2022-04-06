<?php
include "../database/connection.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$code=$_POST['numero'];
$codeDep=$_POST['codeDep'];
$sql="UPDATE filliere SET nom='$nom',codeDep=$codeDep,codeFil=$code WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo "error";

?>
