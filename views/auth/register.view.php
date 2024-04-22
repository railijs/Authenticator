<?php require "../views/components/header.php" ?>



<article>
    <div class="register">
<h1>Register</h1>

<form method="POST">
    <label>E-mail: 
        <input name="email" type="email"/> 
        <span class="explanation">(nevar but virss 255 rakstzimem)</span>
        <?php if (isset($errors["email"])) { ?>
            <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label>Password: 
        <input name="password" type="password"/>  <span class="explanation">(jabut 8 rakstzimem, 1 lielam, 1 mazam, 1 ciparam, 1 ipasai rakstzimei)</span>
        <?php if (isset($errors["password"])) { ?>
            <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <button class="register-button">Register</button>
    <br/>
    <a href="/login">Log In</a>

</form>
</div>
</article>

<?php require "../views/components/footer.php" ?>