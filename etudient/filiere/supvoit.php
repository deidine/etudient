<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="DELETE  FROM filliere where id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo "eroor";
?>