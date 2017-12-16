
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>
    <form action="generer1.php" method="post">
        <fieldset>
        <legend>Connexion</legend>
            <label>Login</label>
            <input type="text" name="login" ><br/>
            <label>profil</label>
           <select name="profil">
            <option value="admin">admin</option>
            <option value="user">user</option>
            </select><br/>
           
           
            <input type="submit" value="Connexion">
        </fieldset>
    </form>

</body>
</html>
