
<?php
include "../auth.php";

include "../database/connection.php";
$sql2="SELECT * FROM filliere order by (id) desc";
$res2=mysqli_query($con,$sql2);
$p=mysqli_num_rows($res2);
?>
<html>
    <head>  <style>
        <?php include "../css/4.css";?>
        button{
            background-color : white;
            border-radius: 20px ;
         font-size: large;
         }
         a{
    color : blue;
    text-decoration:unset;
 }
 
 a:hover{
    color:red;}
            </style>

</head>
    
    <body><button style="border-radius:12px;background-color:white;color:blue;">
<a href="index.php"><img src="../log/back.gif">عودة</a></button><br><br>  

<table width=90% border=1>
    <tr>
        <th>code filiere </th>
        <th>nomfilliere</th>
        <th>code departement</th>

        <th colspan=2>تغير</th>
    </tr>
    
        <?php
         while($row=mysqli_fetch_assoc($res2)){?>
            <tr> 
           
            
            <td><?php echo $row['codeFil'];?></td>
            <td><?php echo $row['nom'];?></td>
            <td><?php echo $row['codeDep'];?></td>
            <td><button ><a href="javascript:suprimer(<?php echo $row['id'] ;?>)">حذف</a></button></td>

        <td><button><a href="editer.php?id=<?php echo $row['id'] ;?>">تغير</a></button></td>
       </tr>
        
    <?php };?>
</table>
<script> 
function suprimer(id){
    if(confirm("tu veut vraiment suprimer هل تريد حذف السيارة")){
        window.location='supvoit.php?id='+id;
    }
}</script>
</body>

    </html>