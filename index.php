
<?php

$pdo = new PDO("mysql:host=localhost;dbname=dojophpbduredd;port=3306","phpmyadmin","bddmyadmin");
$stmt = $pdo->prepare("SELECT * FROM article");
$stmt-> execute();
$donnees= $stmt->fetchAll(PDO::FETCH_ASSOC);

// $reponse=array($donnees);
// var_dump($reponse);

$pdo = new PDO("mysql:host=localhost;dbname=dojophpbduredd;port=3306","phpmyadmin","bddmyadmin");
$stmt2 = $pdo->prepare("SELECT * FROM commentaire");
$stmt2-> execute();
$commentaire= $stmt2->fetchAll(PDO::FETCH_ASSOC);

// $resultats=array($commentaire);
//  var_dump($resultats);
        
?>


<body>

     <?php
       include'headerfin.php';
      ?>
<h1> Liste des articles </h1>
    <?php

    foreach ($donnees as $value) {

   
?>
<h2><?=$value["titre"] ?></h2>
<img src="<?=$value["image"]?>">
<p style="color:red"> contenu <?=$value["contenu"] ?></div>
<div style="color: red"> Publié le:<?=$value["date"] ?> </div>
  <?php
    }
    ?>
  <?php
    foreach ($commentaire as $valeur){
        if($value["id_article"] == $valeur["id_article"]){ 
    ?> <br>
    <h2>Commentaires:</h2>
    <div><?=$valeur["titre"] ?></div>
    <div> contenu <br>:<?=$valeur["contenu"] ?></div>
    <div> Publié le: <?=$valeur["date"] ?> </div>
    <?php
    }
}
    ?>
</body>
</html>
