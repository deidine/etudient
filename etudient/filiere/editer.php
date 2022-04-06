<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM filliere WHERE id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>

<html>
    <head><title>les bultain</title>
        
<link href="../css/6.css" rel="stylesheet">        
</head>
    <body>
        
        <a href="afficher.php"><button><img src="../log/back.gif">RETOUR</button></a><div class="c">
        <form  action="modvoit.php" method="POST">
        <label>id </label><br>
           <input type="number" name="id" value="<?php echo $row['id'];?>" placeholder="entrer le numero du eleve ici" required ><br>

           <label>code filliere </label><br>
           <input type="number" name="numero" value="<?php echo $row['codeFil'];?>"   placeholder="entrer le numero du 
filiere ici" required ><br>

            <label>nom filliere</label><br>
            <input type="text" name="nom" value="<?php echo $row['nom'];?>"   placeholder="entrer le nom du filliere ici" required><br>
      
            <label>codedepartement</label><br>
            <input type="number" name="codeDep" value="<?php echo $row['codeDep'];?>"   placeholder="entrer le code du departement" required><br>
           <input type="submit" value="enrgistrer" required> <input type="reset" value="annuler">
        </form> </div><br>
    </body>
</html>