<?php 

session_start();
if(isset($_SESSION['username'])){}else header("location:index.php");
include "database/connection.php";
$sql1="SELECT * FROM filliere ";$sql3="SELECT * FROM etudient ";
        $res1=mysqli_query($con,$sql1);$res3=mysqli_query($con,$sql3);
        $row1=mysqli_num_rows($res1);$row3=mysqli_num_rows($res3);
                $sql8="SELECT * FROM classe ";
            $res8=mysqli_query($con,$sql8);
            $row8=mysqli_num_rows($res8);
            
     ?>   
<html>
    <head> <style>        
    <?php include "agence.css";  ?></style>
 <title>maison</title></head>
    <body>
  
<br><br><br><br>
<div class="h">
        <table class="center" width=40% height=auto border=5 paddiing=12px >
        <tr><td><i > les etudient</i><a href="etudient/"><button class="chauffeur"></button></a></td>

         <td><i >departement  </i><a href="departement/"><button class="tarder"></button></a></td>
</tr><tr>
    <td><i >filiere</i><a href="filiere/"><button class="voyageur"></button></a></td>
<td><i >classe </i>   <a href="classe/"><button class="message"></button></a></td>
        </tr></table>
      </div> 
        

        <header>
            <h3 >bonjour ici le page d'acceil du notre application
          </h3>
        </header>
  
 
        

        <div class="left">
            <button class="logout"><a href="logout.php">خروج</a></button><br>
         <b style="font-size:20px;">    table du l'universite</b>
<table style="height:50%" border=1 width=100% >
  <tr><th>nombre des etudients dans l'universite<th>nombre du filere</th><th>nombre du classe</th>
        </tr>
        <tr><td><?php echo $row3;?></td><td><?php echo $row1;?></td><td><?php echo $row8;?></td></tr>
</table>
        </div>
        <div class="op"><pre style="font-size:20px;">ecrire ton opnion</pre>
        <form action="insop.php" method="post">
           <lable class="op">nom </label><br><input style="border-radius:20px;" type="text" name="nom" required><br><br>
           <label  class="op">date</label><br><input style="border-radius:20px;" readonly type="text" name="date" value="<?php echo date("Y-m-d");?>"><br> <br>
       commentaire <textarea class="text" style="width:100%;border-radius:12px;"  name="text" placeholder="entrer ton opinion" required></textarea>
<br><br><input style="border-radius:12px;"type="submit" name="evoiyerr" value="envoiyer"></form><br><br><br>
<h2 style="color:white;"><button style="border-radius:25px;background-color:blue;"><a href="afop.php"> التعليقات هنا</a></button>أضغط لترى</h2>
   </div> <footer>
        tout le droit reserver<br>
        <pre style="font-size:20px;">contacter nous 22102802</pre>

    </footer>
 <h1 id="h" value="<?php echo $row8;?>"></h1>
    
    </body>
</html>