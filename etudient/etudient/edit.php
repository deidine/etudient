<?php
include "../auth.php";

include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM etudient WHERE id=$id";
$res=mysqli_query($con,$sql);
$ligne=mysqli_fetch_assoc($res);
?>
<html>
    <head><title>enrefisrement</title>
    <link href="../css/l.css"  rel="stylesheet">
   </head>
    <body><div class="c">
        <form action="modifier.php" method="POST">
        <label>id</label> <br><input type="number" name="id" value="<?php echo $ligne['id'];?>" required><br><br>
        <label>numero </label> <br><input type="number" name="numero" value="<?php echo $ligne['numero'];?>"
         placeholder="entrer le numero" required><br><br>
            <label>nom الإسم</label> <br><input type="text" value="<?php echo $ligne['nom'];?>"
             name="nom" placeholder="entrer ton nom" required><br><br>
            <label>prenom اللقب</label><br><input type="text" name="prenom"  value="<?php echo $ligne['prenom'];?>" placeholder="entrer ton prenom" required><br><br>
            
<label>code departement</label><br>
 <input  type="number" value="<?php echo $ligne['codeDep'];?>" required name="dep" placeholder="entrer ton telephone" ><br><br>

<input type="submit" value="editer">
        </form></div>
        <br>
        <a href="afficher.php"><button><img src="../log/back.gif">RETOUR</button></a><div class="a">

    </body>
</html>
