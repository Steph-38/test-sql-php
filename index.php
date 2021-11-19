<?php 
    session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TEST PHP/SQL</title>
    </head>
    <body>
        <header>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/javascript.js"></script>
        </header>
        <!-- Formulaire -->
        <?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['username'] . ' est connecté';
            } else {
                echo 'utilisateur anonyme';
            } 
        ?>
        <form action="index.php" method="post">
            <div>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            <button type="submit" class="black-button" id="loginButton">Login</button>
        </form>
        <?php
            echo '<br />';
            // valeur aléatoire
            $randomNumber = rand(1,100);
            if ($randomNumber % 2 == 0) {
                echo $randomNumber . ' est pair' . '<br />';
            } else {
                echo $randomNumber . ' est impair' . '<br />';
            }
            // Tableau des mois d'une année
            $tabMonths = array(
                0 => 'Janvier',
                1 => 'Février',
                2 => 'Mars',
                3 => 'Avril',
                4 => 'Mai',
                5 => 'Juin',
                6 => 'Juillet',
                7 => 'Août',
                8 => 'Septembre',
                9 => 'Octobre',
                10 => 'Novembre',
                11 => 'Décembre'
            );
            foreach ($tabMonths as $key => $value) {
                echo $key . ' => ' . $value . '<br />';
            };
        ?>
        <footer>
            <?php include('./modules/newsletter.php'); ?>
        </footer>
    </body>
</html>