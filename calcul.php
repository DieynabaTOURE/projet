<!DOCTYPE HTML>
<html lang="Fr">

    <head>
        <meta charset="UTF-8">
        <title>Calculatrice</title>
    </head>

<body>

    <form method="POST" action="#">
         Nombre1 <input type="number" name="nb1"> <br> <br>
         Nombre2 <input type="number" name="nb2"> <br> <br>
         Operateur <select name="choix">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
                <option value="modulo">%</option>
              </select> <br> <br>
         <input type="submit" value="calculer">   
         <input type="reset" value="effacer">  
    </form>  

    <?php

            extract($_POST);
            if(isset($nb1) && isset($nb2) && isset($choix))
            {
                if($nb1 !=NULL AND $nb2 !=NULL)
                {
                    if($choix==division AND $nb2==0)
                    {
                        echo "Voyons on ne peut pas diviser par 0";
                    }
                    else
                    {
                        if($choix==addition)
                        {
                            $result=$nb1+$nb2;
                            echo "la somme est $result";
                        }
                        if($choix==soustraction)
                        {
                            $result=$nb1-$nb2;
                            echo "la soustraction donne $result";
                        }
                        if($choix==multiplication)
                        {
                            $result=$nb1*$nb2;
                            echo "la multiplication est : $result";
                        }
                        if($choix==modulo)
                        {
                            $result=$nb1%$nb2;
                            echo "le reste de la division est $result";
                        }
                        if($choix==division)
                        {
                            $result=$nb1/$nb2;
                            echo "la division donne $result";
                        }
                    }


                }
                else
                {
                    echo "veuillez renseigner tous les champs";
                }
            }

        ?>


</body>



</html>


