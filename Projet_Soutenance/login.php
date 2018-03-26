<?php

    include 'header.php';

?>

<!-- Connexion Link'Cal -->
<div class="loginForm">
<div class="col-xs-12">

    <div class="row" id="login">

    <form action="/action_page.php" method="post">
        <div class="col-xs-6">
        <div class="form-group">
            <h1>Connexion</h1>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Adresse Email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd" required>
        </div>
        <button type="submit" class="btn btn-default">Connexion</button>
    </form>
</div>

<!-- Inscription Link'Cal -->

<div id="loginform">
        <form action="/action_page.php" method="post">
            <div class="col-xs-6">
                <div class="form-group">
                    <h1>Inscription</h1>
                    <label for="email">Nom de la société:</label>
                    <input type="text" class="form-control" id="company" placeholder="Nom de votre société" name="company" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Adresse E-mail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="confirmPwd">Confirmation du mot de passe:</label>
                    <input type="password" class="form-control" id="confirmPwd" placeholder="Confirmer votre mot de passe" name="confirmPwd" required>
                </div>
                <button type="submit" class="btn btn-default">Créer un compte</button>
        </form>
    </div>
</div>
</div>
</div>

<?php

include 'footer.php';

?>
