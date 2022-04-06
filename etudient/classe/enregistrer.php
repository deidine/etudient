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
        <label>code classe </label><br>
           <input type="number" name="codeCl"  placeholder="entrer le numero du bus ici" required ><br>
           <label>code filliere </label><br>
           <input type="number" name="codeFil" placeholder="entrer le numero du bus ici" required ><br>

            <label>nom classe</label><br>
            <input type="text" name="nom"   placeholder="entrer le marque du bus ici" required><br>
      
            <label>nombre table</label><br>
            <input type="number" name="numTab"  placeholder="entrer le date du travail du bus " required><br>
      
            <input type="submit" value="enrgistrer" > <input type="reset" value="annuler">
        </form> </div><br>
    <nav class="left">
          <b>enregistrer les information du voiture ici <br>سجل معلومات السيارة هنا بعد الأنتهاء أضغط على <br>enregistrer
          </B>
              </nav></body>
</html>
