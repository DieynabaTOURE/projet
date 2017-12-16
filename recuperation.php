<?php

extract($_POST);
{
function chaine_aleatoire($nb_car, $chaine = ' azertyuiopqsdfghjklmwxcvbn1234 56789')
{
$nb_lettres = strlen($chaine) - 1;
$generation = '';
for($i=0; $i < $nb_car; $i++)
{
$pos = mt_rand(0, $nb_lettres);
$car = $chaine[$pos];
$generation .= $car;
}
return $generation;
}
$fichier=fopen('gg.txt', 'w+');
$password = chaine_aleatoire(8, $chaine = ' azertyuiopqsdfghjklmwxcvbn1234 56789'."\r\n");

$line=fgets($fichier);
fclose($fichier);
/*$prof=fgets($fichier,$profil.'-');*/
while(($line=fgets($fichier)) != false)


  $donnee=explode('-',$line);{



     /* if($log != $donnee[0] && $prof !=$donnee[1])*/
    {
          $fichier= fopen('gg.txt', 'a+');
          $log=fputs($fichier,$login.'-',$profil.'-',$password);
          echo'bonjour!'.$profil.'<br/>';
          echo'le mot de pass est'.$password.'<br/>';
          echo'le login est'.$login.'<br/>';
          fclose($fichier);

    }

  /*$fichier = fopen('gg.txt', 'a+');
  $password = chaine_aleatoire(8, $chaine = ' azertyuiopqsdfghjklmwxcvbn1234 56789');*/
 if ($login==$donnee[0])
 {
  $donnee=explode('-',$line); 
  
  $fichier=fopen('gg.txt', 'r+') ;
      fclose($fichier);
   }
  }
 }

?>