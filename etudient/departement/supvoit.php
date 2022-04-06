<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="DELETE FROM departement  where id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "eroor";
?>