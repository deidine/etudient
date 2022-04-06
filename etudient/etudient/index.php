
<html>
    <head>         
       
 <link href="../css/o.css" rel="stylesheet"><title>maison</title></head>
    <body>
        
   <j class="tete"> <h3>bien venu ici vous trouvez les etudients du univiersite</h3>
</j><br><br><br><br>
    <a href="../home.php"><button><img src="../log/back.gif">RETOUR</button></a>


<div class="h"><fieldset><legend style="color:black;">
</legend>
        <table class="center" style="margin:auto;" width=30% height=50% paddiing=12px >
   <tr><td><i style="color: black;font-size:20px;">
   enregistrer un etudient</i><button onmousedown="img1()"><a href="enregistrer.php">
       <img  style="width: 100%; height:100%;" onMouseOver="src='../img/stud.jfif'" 
       onMouseOut="src='../img/stud.jfif'" src="../img/stud.jfif"></a><br></td>
    

    <td><i style="color: black;font-size:20px;">afficher tout les etudients</i>
    <button onmousedown="img1()"><a href="afficher.php"> <img  style="width: 100%; height:100%;" onMouseOver="src='../img/stud.jfif'" 
       onMouseOut="src='../img/stud.jfif'" src="../img/stud.jfif"></a><br></td>
<tr><td colspan=2><i style="color: black;font-size:20px;"> chercher un etudient
</pre><button onmousedown="img1()"><a href="chercl.php">
    <img style="width: 100%; height:100%;" onMouseOver="src='../log/image55.png'" onMouseOut="src='../log/image5.png'" src="../log/image5.png"> </a></td></tr>

          </div> 
        </table></fieldset>

        <?php 
include "../auth.php";
include "../database/connection.php";
       $sql4="SELECT * FROM etudient";
      $res4=mysqli_query($con,$sql4);
       $row4=mysqli_num_rows($res4);
        ?> <ol class="l"><?php echo "<li>il y'a $row4 etudient dans l'universite</li>";?></ol>
        
    <footer>
        tout le drot reserver<br>
        <pre style="font-size:20px;">contacter nous 22102802</pre>

    </footer>
    </body>
</html>






