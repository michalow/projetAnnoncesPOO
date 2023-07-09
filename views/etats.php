<div id="wrapper">
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Etat de produit</h1>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom de l'état</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($etats as $etat) {
                       ?>
                            <tr>
                                <td><?= $etat->getId() ?></td>
                                <td><?= $etat->getNameState() ?></td>
                                <td><?= $etat->getDescription() ?></td>
                                <td>
                                    <a class='btn btn-primary' href='/<?= ROOT_DIR ?>/etat/<?= $etat->getId() ?>' role='button'>Modifier</a>
                                    <a class='btn btn-danger' href='etat/<?= $etat->getId() ?>' role='button'>Supprimer</a>
                                </td>
                            </tr>
                            <td>
                     
                        <?php  } ?>
                        </tbody>
                    </table>
                    <div class='row'>
                    <div class='col'>
                        <a class='btn btn-success' href='' role='button'>Ajouter état</a>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>