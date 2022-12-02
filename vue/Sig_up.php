       
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sig_up_page.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="block_formulaire">
        <h1>Learn JS | Inscription</h1>   
        <form action="../includes/register.inc.php" method="post">
            <input type="text" 
            name="firstname" 
            placeholder="firstname" 
            value="<?php echo $_GET["firstname"] ?? '' ?>" required><br>
            <input 
            type="text" 
            name="lastname" 
            placeholder="lastname" 
            value="<?php echo $_GET["lastname"] ?? '' ?>" 
            ><br>
            <input 
            type="text" 
            name="username" 
            placeholder="username" 
            value="<?php echo $_GET["username"] ?? '' ?>"
            required><br>
            <input type="email" name="email" value="<?php echo $_GET["useremail"] ?? '' ?>"   placeholder="email" required><br>
            <input type="password" name="password"   placeholder="password" required><br>
            <input type="password" name="password-confirm" placeholder="confirm your password" required><br>
            <button type="submit" name="register">S'inscrire</button>
            <button type="reset" name="reset">Raffraichir</button>
            <p>Déja inscrit ? <a href="./Sig_in.php">Connectez-vous</a></p>
        </form>
    </div>
   
</body>

</html>