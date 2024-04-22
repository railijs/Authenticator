<?php require "../views/components/header.php" ?>

<article>
<div class="login">
<h1>Login</h1>

<form method="POST">
    <label>E-mail: 
        <input name="email" type="email"/>
        <?php if (isset($errors["email"])) { ?>
            <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label>Password: 
        <input name="password" type="password"/>  
        <?php if (isset($errors["password"])) { ?>
            <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <button class="login-button">Login</button>
    <br/>
    <a href="/register">Create Account</a>
</form>
</div>  
</article>

<?php if(!isset($_SESSION["message"])) { ?>
<p class="flash"> <?= $_SESSION["message"] ?></p>
<?php } ?>

<?php require "../views/components/footer.php" ?>