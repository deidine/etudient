<?php
include "../database/connection.php";
$id=$_POST['id'];
$num=$_POST['numero'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dep=$_POST['dep'];
$sql="UPDATE etudient SET nom='$nom', prenom='$prenom', numero=$num,codeDep=$dep WHERE id='$id'";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo"eroor";?>