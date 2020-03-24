
<?php

$pdo = new PDO("mysql:host=localhost;dbname=dojophphdurbdd;port=3306","phpmyadmin","bddmyadmin");
$stmt = $pdo->prepare("SELECT titre.article, image.article, contenu.article, date.article' FROM article");
$stmt-> execute();
$donnees= $stmt->fetchAll(PDO::FETCH_ASSOC);
$response=json_encode($donnees);
 var_dump($response); 



   $results = array(($response));
        
?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

     <?php
      include'header.php';
      ?>

    <?php
    foreach ($results as $value) {
     ?>
    
    <div> <?=$value["titre"] ?> </div>
    <img src= <?=$value["image"] ?>>  
    <div> <?=$value["contenu"] ?> </div>
    <div> <?=$value["date"] ?> </div>
    

    <?php
    }
    ?> 
</body>
</html>