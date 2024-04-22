<?php require "../views/components/header.php" ?>
<?php require "../views/components/navbar.php" ?>

<h1 class="email">Welcome, <?= isset($_SESSION["email"]) ? $_SESSION["email"] : "guest"; ?></h1>



<?php require "../views/components/footer.php" ?>