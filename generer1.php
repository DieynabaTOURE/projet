
<?php 
    extract($_POST);
    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn1234 56789')
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
    $nbre_de_login=0;
    $fichier=fopen('gg.txt','r');
    for($i=0;$i<10;$i++){
        $line = fgets($fichier);
        $donnee=explode("-",$line);
        $login=strval($donnee[0]);
        if($login==$login)
        {
            $nbre_de_login++;
        }
    }
    if(isset($nobre_de_login) && ($nbre_de_login>=1))
    {
        echo"desolé ce nom d'utilisateur existe deja ,choissir un autre";
    }
    else{
        $fichier = fopen('gg.txt', 'a+');
        $password = chaine_aleatoire(8, $chaine = 'azertyuiopqsdfghjklmwxcvbn1234 56789');
        $fin ="fin"."\r\n";
        fputs($fichier , $login.'-'.$password.'-'.$profil.'-'.$fin);
        fclose($fichier);
        echo $login."<br/>";
        echo $profil."<br/>";
        echo $password;       
    }
?>