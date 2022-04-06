<?php 
       
       include "../auth.php";?>
<html>
    <head>      <style>
        <?php include "../css/11.css";?> </style>  
 <title>maison</title></head>
    <body>
        
   <j class="tete"> <h3>
       
   bien venu ici c'est la page du classe
   </h3>
</j>


    <a href="../home.php"><button style="color:black;margin-top:70px;"><img src="../img/back.gif">RETOUR</button></a>
<h1> classe du universiteè </h1>
<div class="h"><fieldset><legend style="color:black;">
</legend>
        <table class="center" style="margin:auto;" width=30% height=50% paddiing=12px >
        <tr><td><i style="color: black;font-size:20px;">enregistrer une nouvelle filiere</i>
        <a href="enregistrer.php"><button class="en_voit"></button></a></td>
        <td><i style="color: black;font-size:20px;"> afficher tout les les filiere</i>
        <a href="afVoit.php"><button class="af_voit"></button></a></td></tr>
         </div> 
        </table></fieldset>
        
        
        <?php 
       
        include "../database/connection.php";
       $sql4="SELECT * FROM classe";
      $res4=mysqli_query($con,$sql4);
       $row4=mysqli_num_rows($res4);
        ?> <ol class="l"><?php echo "<li>il y'a $row4 classe dans l'universite</li>";?></ol>
        
    <footer>
       <br>
        <pre style="font-size:20px;"> tout le drot reserver 22102802</pre>

    </footer>
    </body>
</html>