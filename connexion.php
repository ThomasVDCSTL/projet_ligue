<?php
include 'header.php';
?>

<form action="connexion.php" class="border flexbox flexcol" method="post">
    <fieldset>
        <legend>Nom de Compte    </legend>
        <input type="text" name="acc_name">
    </fieldset>
    <fieldset>
        <legend>Password</legend>
        <input type="password" name="password">
    </fieldset>
    <button class="wid100" type="submit">Connexion</button>
    <a href="create_acc">create account</a>
</form>

<?php
include "footer.php";
?>



