<html>
    <head> 
      <style>
          
nav{
    background-color: orange;
    float: left;
    margin-top:-43%;
    padding: 40px;
    border-radius:20px;
}
nav:hover{
    background-color:gold;
}
select{
    background-color:blue;
    color:white;
    font-size:20px;
}
b{
    color:green;
    font-size:20px;
}
      </style>  <meta charset="UTF-8"> <link href="../css/m.css" rel="stylesheet"><title>enrefisrement</title>
   </head>
    <body><div class="c">
      
        <form action="insert.php" method="POST">
        
        <label>numero </label> <br><input type="number" name="numero"
         placeholder="entrer le numero" required><br><br>
            <label>nom الإسم</label> <br><input type="text" maxlength=20 minlength=2
             name="nom" placeholder="entrer ton nom" required><br><br>
            <label>prenom اللقب</label><br><input type="text" name="prenom"  maxlength=20 minlength=2 placeholder="entrer ton prenom" required><br><br>
            
<label>code departement</label><br>
 <input  type="number" maxlength=8 minlength=2 required name="dep" placeholder="entrer ton telephone" ><br><br>

<input type="submit" value="enregistrer"> <input type="reset" value="annuler">
        </form></div><br><br>
       <a href="index.php"><button><img src="../img/back.gif">RETOUR</button></a>
       <nav class="left">
<b>enregistrer les information du voyageur ici <br>سجل معلومات المسافر هنا بعد الأنتهاء أضغط على <br>enregistrer
</B>
    </nav>
    </body>
</html>