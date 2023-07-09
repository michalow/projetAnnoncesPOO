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
            <h1 class="major">Annonces</h1>
            <!-- Table -->
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Etat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // $games est défini dans le controlleur, on peut l'utiliser dans la vue
                        // Attention : ne jamais faire appel au model pour aller chercher des choses non préparées dans le controleur
                        foreach ($annonces as $annonce)
                        { ?>
                            <tr>
                                <td><?= $annonce->getId() ?></td>
                                <td><?= $annonce->getTitle() ?></td>
                                <td><?= $annonce->getDescription() ?></td>
                                <td><?= $annonce->getPriceProduct() ?></td>
                                <!-- <td><?= $annonce->getState()->getName() ?></td> --> 
                                <!-- getState id_etat dans table annonces -->
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