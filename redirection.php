<?php
session_start();
if(!isset ($_SESSION ['login']))
{
    header ('location: connexion0.php');
}
    else {
if($_SESSION['login'] == 'user')
{
    ?>
    <?php
$date = date("d/m/Y");
 $heure = date("H:i");
 print("<h3>Nous sommes le $date Il est $heure</h3>");
?>


    <form action='#' method='post'>
        <fieldset style='width: 500px;height: 150px; background: gray;'>
            <legend>
                Connexion espace membre
            </legend>
            <label>Profil :</label>
            <input type='text' placeholder='profil' name='login'><br/><br/>
            <label>Mot de passe :</label>
            <input type='text' placeholder='password' name='password'><br/><br/>
            <input type='submit' value='Connexion' name='connecter'>
</fieldset>
    </form><br/>
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
     <?php



if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    echo " <nav>
    <ul>
        <li><strong>ACCUEIL</strong></li>
        <hr class='separation'>

        <li><strong>EQUIPE</strong></li>
        <hr class='separation '>


        <li><strong>SERVICES</strong></li>
        <hr class='separation '>

        <li><strong>PRODUITS</strong></li>
        <hr class='separation '>

        <li><strong>CONTACTS</strong></li>
        <hr class='separation '>

    </ul>
</nav>
<a href='calcul.php'><h4>CALCULATRICE</h4></a>";

echo '<fieldset  style="width: 300px;height: 150px; background: pink;">';
echo '<h2 style="background-color: pink; color: grey; width: 200px;">Bonjours      ' .$_SESSION['login'].'</h2>';

 echo '<p>Voulez vous deconnecter??? </p>';
 echo '<a href="logout.php"><input type="submit" value="DECONNEXION" ></a>';
 echo '</fieldset>';
}
    ?>
    <?php

  
        if (isset($_SESSION['login']) && isset($_SESSION['password']))
        {
         
        }
        ?>

    <?php
}   
else
{
    echo"Désolé vous n'etes pas autorisé à acceder à ce site.";
}
    }
?>
