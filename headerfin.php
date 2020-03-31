<?php
$pdo = new PDO("mysql:host=localhost;dbname=dojophpbduredd;port=3306","phpmyadmin","bddmyadmin");
$stmt = $pdo->prepare("SELECT * FROM utilisateur");
$stmt-> execute();
$don= $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dojophp.css">
    <title>Document</title>
</head>
<header>
<nav>
    <ul>
        <li><h1>Blog</h1></li>
        <li><a href="#">
                <?php
                foreach ($don as $valeur) {
                     if($valeur["id_utilisateur"]!==0){
                ?>
               <div> <?=$valeur["pseudo"] ?> </div>
                <?php
                     }else{
                      ?>   
                    <button> connexion</button> 
                <?php
                }
                ?> 
                <?php
                }
                ?> 
        </a>
    </li>
        
    </ul>
</nav>
</header>
