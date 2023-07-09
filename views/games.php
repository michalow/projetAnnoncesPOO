<!DOCTYPE HTML>
<html>
<?php require_once "views/common/header.php"; ?>
<body class="is-preload">

<?php require_once "views/common/navbar.php"; ?>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Résultats de la recherche</h1>
            <!-- Table -->
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Année</th>
                            <th>Plateforme</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // $games est défini dans le controlleur, on peut l'utiliser dans la vue
                        // Attention : ne jamais faire appel au model pour aller chercher des choses non préparées dans le controleur
                        foreach ($games as $game)
                        { ?>
                            <tr>
                                <td><?= $game->getId() ?></td>
                                <td><?= $game->getTitle() ?></td>
                                <td><?= $game->getYear() ?></td>
                                <td><?= $game->getPlatform()->getName() ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

        </div>
    </section>

</div>

<?php require_once "views/common/footer.php"; ?>
</body>
</html>