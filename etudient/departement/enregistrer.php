<?php
include "../auth.php";
?>

<html>
    <head>
    <style>
          select{
        width:50%;

        background-color:blue;
        color:white;
        font-size:20px;        height: 30px;
    }
    
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
        <label>code departement </label><br>
           <input type="number" name="codeDep"  placeholder="entrer le numero du departemetn ici" required ><br>
         
           <label>nom departemetn</label><br>
            <input type="text" name="nom"   placeholder="entrer le nom du departemetn ici" required><br>
            <label>nom du etablisement</label>
            <!--<input type="text" name="etab"   placeholder="entrer 
            le nom du departemetn ici" required><br>--><br>
       <div class="select"> <select name="etab" required>
<option></option>
<option>FST</option>
<option>faculte luteratture</option>
<option>faculte economique</option>
 </select>  </div> <br><br>
        <input type="submit" value="enrgistrer" > <input type="reset" value="annuler">
        </form> </div><br>
    <nav class="left">
          <b>enregistrer les information du departement ici
          </B>
              </nav></body>
</html>
