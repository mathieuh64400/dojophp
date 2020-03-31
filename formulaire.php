<?php
  // Definition des constantes et variables
  define('pseudo','toto');
  define('PASSWORD','tata');
  $errorMessage = '';
 
  // Test de l'envoi du formulaire
  if(!empty($_POST)) 
  {
    // Les identifiants sont transmis ?
    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {
      // Sont-ils les mêmes que les constantes ?
      if($_POST['email'] !== $_SESSION['email']) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== $_SESSION['password']) 
      {  
        $errorMessage = 'Mauvais password !';
      }
        else
      {
        // On ouvre la session
        session_start();
        // On enregistre le login en session
        $_SESSION['login'] = pseudo;
        // On redirige vers le fichier admin.php
        // header('Location: http://www.monsite.com/admin.php');
        // exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Formulaire d'authentification</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <?php
          // Rencontre-t-on une erreur ?
          if(!empty($errorMessage)) 
          {echo '<p>', htmlspecialchars($errorMessage), '</p>';}
            
          
        ?>
       <p>
          <label for="login"> votre email </label> 
          <input type="text" name="email" id="email" value="" />
        </p>
        <p>
          <label for="password"> votre mot de passe : </label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Se connecter" />
        </p>
      </fieldset>
    </form>
  </body>
</html>