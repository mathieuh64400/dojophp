<?php
session_start();
session_id();
$_SESSION['pseudo'] = "";
$_SESSION['pwd'] = "";

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
<body>
<header>  
<nav>
    <ul>
        <li><h1>Blog</h1></li>
        <li><a href="#">
                <?php
                     if(isset ($_SESSION['pseudo']) && ($_SESSION['pwd'])){
                ?>
               <div> $_POST["Pseudo"] </div>
                <?php
                     }else{
                      ?>   
                    <button> connexion</button> 
                <?php
                }
                ?>  
        </a>
    </li>
        
    </ul>
</nav>
</header>  
</body>
</html>