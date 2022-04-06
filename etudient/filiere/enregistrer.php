<?php
include "../auth.php";
?>

<html>
    <head>
    <style>
          
          nav{
              background-color: orange;
              float: left;
              margin-top:-25%;
              padding: 40px;
              border-radius:20px;
          }
          nav:hover{
              background-color:gold;
          }
          b{
              color:green;
              font-size:20px;
          }
                </style><title>les bultain</title>
    <link href="../css/6.css" rel="stylesheet">
    </head>
    <body>
        
        <a href="index.php"><button><img src="../img/back.gif">RETOUR</button></a><div class="c">
        <form  action="insVoit.php" method="POST">
         <label>code filliere </label><br>
           <input type="number" name="numero"  placeholder="entrer le numero du 
filiere ici" required ><br>

            <label>nom filliere</label><br>
            <input type="text" name="nom"   placeholder="entrer le nom du filliere ici" required><br>
      
            <label>codedepartement</label><br>
            <input type="number" name="codeDep"  placeholder="entrer le code du departement" required><br>
      
            <input type="submit" value="enrgistrer" > <input type="reset" value="annuler">
        </form> </div><br>
    <nav class="left">
          <b>enregistrer les information du filier ici <br>سجل معلومات السيارة هنا بعد الأنتهاء أضغط على <br>enregistrer
          </B>
              </nav></body>
</html>
