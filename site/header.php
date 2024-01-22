<header>
    <div class="follow-box">
        <div class="container">
            <ul>
                <li><a href="https://x.com/" target="_blank" class="fa-brands fa-square-x-twitter"></a></li>
                <li><a href="https://www.instagram.com" target="_blank" class="fa-brands fa-square-instagram"></a></li>
                <li><a href="https://www.fb.com" target="_blank" class="fa-brands fa-square-facebook"></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank" class="fa-brands fa-linkedin"></a></li>
            </ul>
        </div>
    </div>
    <?php
        $pagina = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
    ?>
    <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.php">+ VET</a></h1>
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li class= "<?= ($pagina== "index") ? "active" : ""?>"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                <li class= "<?= ($pagina== "gallery") ? "active" : ""?>"><a href="gallery.php">galeria</a></li>
                <li class= "<?= ($pagina== "servicos") ? "active" : ""?>"><a href="servicos.php">serviços</a></li>
                <li class= "<?= ($pagina== "about") ? "active" : ""?>"><a href="about.php">sobre nós</a></li>
                <li class= "<?= ($pagina== "contacts") ? "active" : ""?>"><a href="contacts.php">contactos</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" id="user">
    <?php if (isset($user)): ?>

        <p>
            Bem vindo <a href="user_inter.php"><?= htmlspecialchars($user["name"]) ?></a>
            <br><a href="logout.php">Log out</a>
        </p>

    <?php else: ?>

        <p><a href="login.php">Log in</a> ou <a href="signup.html">Registar</a></p>

    <?php endif; ?>
    </div>
</header>