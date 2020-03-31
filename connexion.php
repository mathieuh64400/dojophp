<?php
session_start();
$Messageerreur="une erreur est survenue!! Remplissez de nouveau le formulaire";




$pdo = new PDO("mysql:host=localhost;dbname=dojophpbduredd;port=3306","phpmyadmin","bddmyadmin");
$stmt = $pdo->prepare("SELECT * FROM utilisateur");
$stmt-> execute();
$valeur= $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 

<?php
    if($valeur["pseudo"]==!$_POST["pseudo"] && $valeur["motdepasse"]==!$_POST["motdepasse"]){
                 include('formulaire.php');
                }else{
                      ?>   
    <form action="connexion.php" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <p>
          <label for="login"> votre pseudo </label> 
          <input type="text" name="email" id="email" value="" />
        </p>
        <p>
          <label for="password"> votre mot de passe : </label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Se connecter" />
        </p>
      </fieldset>
    </form>
                <?php
                }
                ?> 
               