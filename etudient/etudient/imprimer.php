
<?php
include "../database/connection.php";
$p=$_POST['numerop'];
$sql="SELECT * FROM etudient ORDER BY (id)desc LIMIT $p";
$res=mysqli_query($con,$sql);

?>
<html>
    <head>  <link href="../css/n.css" rel="stylesheet"></head><body onload="window.print()">
     <table border=1 cellspacing=10 width=90%>
        <tr>
        <th>order التنظيم</th>

        <th>numero etudient</th>
            <th>code departement</th>
            <th>nom et prenom</th>
        </tr>
        <tr>
            
           <?php for($i=1;$i<100;$i++) 
           while($ligne=mysqli_fetch_assoc($res)) {?>
                 <td><?php echo $i++;?></td>
                 <td><?php  echo $ligne['numero'];?></td>
            <td><?php  echo $ligne['codeDep'];?></td>  
<td><?php  echo $ligne['nom']."/   ".$ligne['prenom'];?></td>  
           </tr>
           <?php };?>
</tr>
    </table>

           </div>   </fieldset>
</body>

    </html>