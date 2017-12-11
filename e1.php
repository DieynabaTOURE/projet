
<?php
session_start();
if(!isset ($_SESSION ['login']))
{
    header ('location: connexion0.php');
}
    else {
if($_SESSION['login'] == 'admin')
{
    ?>

 <?php
 $tab=array(array('024','amina','21'),array('025','cheikh','22'),array('026','dieyna','23'));
 echo'<table border="2" width="800" height="300">';
 echo'<tr bgcolor="gray">';
 echo'<th> CODE </th>';
 echo'<th> NOM </th>';
 echo'<th> AGE </th>';
 echo'<th> EDITER </th>';
 echo'</tr>';
 echo'<tr>';
 
 foreach($tab as $val){
    foreach($val as $v){
        echo'<td>'.$v.'<br>';
      
    }
    echo'</td>';
    echo'<td><a href="reponse.php?code='.$val[0].'&amp;nom='.$val[1].'&amp;age='.$val[2].'"><input type="submit" value="EDITER"></a></td>';
    echo'</tr>';
    

}


 ?>
<?php
echo '<fieldset  style="width: 300px;height: 150px; background: pink; float: right;">';
echo '<h2 style="background-color: pink; color: grey; width: 200px;">Bonjours      ' .$_SESSION['login'].'</h2>';

 echo '<p>Voulez vous deconnecter??? </p>';
 echo '<a href="logout.php"><input type="submit" value="DECONNEXION" ></a>';
 echo '</fieldset> <br/><br/>';
}
else {
    echo "Vous n'étes pas " .$_SESSION['login'];
}
}

?>

