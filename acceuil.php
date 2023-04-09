<?php
require_once("connexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
    <header class="header"> 
        <div >
        <h1 class="header-title"> BIENVENU SUR NOTRE PAGE</h1>
            
        <nav class="header-nav">
            <a href="acceuil.php">Acceuil</a> 
            <a href="offrir.php">Offrir un Emplois</a> 
            <a href="propos.php">A Propos</a> 
          </nav>
          <div>
      

          <div id="form">
                <form  name="formulaire" method="post"action="">
                   <input  id="motcle" type="text" name="motcle" placeholder=" Recherche catégorie..."/>
                   <input id="btfind" type="submit" name="btsubmit" value="Recherche"/>
                </form>
            </div>
      </div>
     
          </div>
              
         
        </div>
        
     
    
     


    </header >
<main clas="main">
    
<div id="articles">
   <?php
  if(isset($_POST['btsubmit'])){
      $mc= $_POST['motcle'];
      $reqSelect="SELECT* from entreprise WHERE Categorie like '%$mc%' ";
  }

   else{
       $reqSelect="SELECT * FROM entreprise";
   }
   $resultat=mysqli_query($link,$reqSelect);
   $nbr=mysqli_num_rows($resultat);
   echo "<p><b>".$nbr." </b> Résultats de votre recherche...</p>";
   while($ligne=mysqli_fetch_assoc($resultat))
   {

?>
    <div id="auto"> 
    <a>
        <img src="<?php echo $ligne['NomEnt'] ?>.JPG" /> <br>
        <?php echo $ligne['Categorie'] ;?> <br>
        <?php echo $ligne['Ville'] ;?> <br>
        <?php echo $ligne['Email'] ;?> <br>
 
   </a>
     <div>
        <a href="postuler.php"> <input type="submit" name="btpo" value="POSTULER" class="submit"> </a> </br>
        
   </div>
  
    
</div> 
    <?php } ?>
    </main > 



    </div>
    <footer class="foot">
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eaque totam odit earum, molestiae repellat quasi, optio fugiat nemo nulla consequatur eveniet quas laudantium molestias repudiandae ducimus dignissimos quia fuga.</p> 
   </footer>
</body>
</html>