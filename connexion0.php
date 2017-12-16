
<form action='#' method='post'>
        <fieldset style='width: 500px;height: 150px; background: gray;'>
            <legend>
                Connexion espace membre
            </legend><br/>
            <label>Profil :</label>
            <input type='text' placeholder='profil' name='login'><br/><br/>
            <label>Mot de passe :</label>
            <input type='password' placeholder='password' name='password'><br/><br/>
            <input type='submit' value='Connexion' name='connecter'>
</fieldset>
    </form>
    <?php

  $login = "user";
  $password = "user";
  $password0 = "admin";
  $login0 = "admin";
  if(isset($_POST['login']) && isset($_POST['password']))
  {
      if($_POST['login'] == $login && $_POST['password'] == $password) {

          session_start();
          $_SESSION['login'] = $_POST['login'];
          $_SESSION['password'] = $_POST['password'];
          header ('location: redirection.php');
        }
    
        if($_POST['login'] == $login0 && $_POST['password'] == $password0){
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header ('location: e1.php');
        }
       else {
              
              echo "Vos infos sont invalides";

          }

      }
      else {


          echo "Veuillez entrez vos infos";
      }

 ?>
