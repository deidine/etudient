<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM departement WHERE id=$id";
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
           <input type="number" name="id"  value="<?php echo $row['id'];?>" placeholder="entrer le numero du eleve ici" required ><br>
           <label>code departement </label><br>
           <input type="number" name="codeDep" value="<?php echo $row['codeDep'];?>"  placeholder="entrer le numero du departemetn ici" required ><br>
         
           <label>nom departemetn</label><br>
            <input type="text" name="nom" value="<?php echo $row['nom'];?>"  placeholder="entrer le nom du departemetn ici" required><br>
            <label>nom du etablisement</label><br>
            <input type="text" name="etab"value="<?php echo $row['etablissement'];?>"   placeholder="entrer le nom du departemetn ici" required><br>
        
            <input type="submit" value="enrgistrer" required> <input type="reset" value="annuler">
        </form> </div><br>
    </body>
</html>