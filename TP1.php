<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="TP1.php" method="POST">
            <input type="text" name="chiffre1"/>
            <input type="text" name="chiffre2"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/>
            <input type="submit" name="multiplication" value="*"/>
            <input type="submit" name="division" value="/"/>
        </form>
        <p>Résultat : </p>
        <?php
        // Si les données sont saisies, j'affiche au clic sur l'input type submit, le résultat du calcul choisi
        if (!empty($_POST['addition'])) {
            echo strip_tags($_POST['chiffre1']) + strip_tags($_POST['chiffre2']);
        } elseif (!empty($_POST['soustraction'])) {
            echo strip_tags($_POST['chiffre1']) - strip_tags($_POST['chiffre2']);
        } elseif (!empty($_POST['multiplication'])) {
            echo strip_tags($_POST['chiffre1']) * strip_tags($_POST['chiffre2']);
        } elseif (!empty($_POST['division'])) {
            echo strip_tags($_POST['chiffre1']) / strip_tags($_POST['chiffre2']);
        }
        ?>
    </body>
</html>