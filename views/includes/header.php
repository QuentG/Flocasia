<header>
    <div class="logo">
        <a href="<?= PATH ?>"><img src="https://picsum.photos/400/200" alt="logo"></a>
    </div>

    <div class="menu">
        <a class="link" <?= (in_array($page, ['game'])) ? 'active' : ''?> href="<?= PATH ?>game">Le jeu</a>
        <a class="link" href="<?= PATH ?>community">Communauté</a>
        <a class="link" href="<?= PATH ?>flocapedia">Flocapédia</a>
        <a class="link" href="<?= PATH ?>contact">Contact</a>
        <a class="link" href="<?= PATH ?>news">Actualités</a>
    </div>

    <div>
        <a class="link-main" href="<?= PATH ?>game">Jouer</a>
        <a class="link-main" href="<?= PATH ?>">Kickstarter</a>
    </div>
</header>

<span><a href="#">Vous n'avez pas de compte ?</a></span>