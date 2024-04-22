
<header>
        <nav>

            <?php if(!isset($_SESSION["email"])): ?>
            <a href="/register">Register</a>
            <?php endif; ?>

            <?php if(!isset($_SESSION["email"])): ?>
            <a href="/login">Log In</a>
            <?php endif; ?>

            <?php if(isset($_SESSION["email"])): ?>
            <form method="POST" action="/logout">
                <button class="log-out-button">Log Out</button>
            </form>
                <?php endif; ?>
    </nav>
</header>