<form action="connexion.php" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <?php
         
          if(!empty($Messageerreur)) 
          {echo '<p>'.$Messageerreur. '</p>';}
            
          
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