<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM classe WHERE id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>

<html>
    <head><title>les bultain</title>
        
<link href="../css/6.css" rel="stylesheet">        
</head>
    <body>
        
        <a href="afVoit.php"><button><img src="../log/back.gif">RETOUR</button></a><div class="c">
        <form  action="modvoit.php" method="POST">
        <label>id </label><br>
           <input type="number" name="id" value="<?php echo $row['id'];?>" placeholder="entrer le numero du eleve ici" required ><br>

           <label>code classe </label><br>
           <input type="number" name="codeCl" value="<?php echo $row['codeCl'];?>" placeholder="entrer le numero du bus ici" required ><br>
           <label>code filliere </label><br>
           <input type="number" name="codeFil" value="<?php echo $row['codeFil'];?>" placeholder="entrer le numero du bus ici" required ><br>

            <label>nom classe</label><br>
            <input type="text" name="nom" value="<?php echo $row['nom'];?>"   placeholder="entrer le marque du bus ici" required><br>
      
            <label>nombre table</label><br>
            <input type="number" name="numTab" value="<?php echo $row['numtab'];?>"  placeholder="entrer le date du travail du bus " required><br>
      
            <input type="submit" value="enrgistrer" required> <input type="reset" value="annuler">
        </form> </div><br>
    </body>
</html>