<!-- Header -->
<header id="header">
    <a href="<?= URL ?>" class="title">Ma super API</a>
    <nav>
        <ul>
            <!-- http://localhost/mvc/games?output=html pour tester sinon c'est un api json -->
            <li><a href="<?= URL ?>categories"  class="<?= str_contains(FULL_URL, "categories/") ? "active" : "" ?>">Categories</a></li>
            <li><a href="<?= URL ?>annonces"  class="<?= str_contains(FULL_URL, "annonces/") ? "active" : "" ?>">Annonces</a></li>
        </ul>
    </nav>
</header>
<?php if (!empty($message)) : ?>
    <div class='row'>
        <div class='alert alert-<?=$message[0]?>'>
            <?= $message[1] ?>
        </div>
    </div>
<?php endif; ?>
<div class="container" id="top">