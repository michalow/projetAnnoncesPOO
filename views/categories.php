<div id="wrapper">
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Catégories</h1>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom de categorie</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($categories as $categorie) {
                       ?>
                            <tr>
                                <td><?= $categorie->getId() ?></td>
                                <td><?= $categorie->getName() ?></td>
                                <td><?= $categorie->getDescription() ?></td>
                                <td>
                                    <a class='btn btn-primary' href='<?= URL ?>categorie/<?= $categorie->getId() ?>' role='button'>Modifier</a>
                                    <a class='btn btn-danger' href='<?= URL ?>categorie/<?= $categorie->getId() ?>' role='button'>Supprimer</a>
                                </td>
                            </tr>
                            <td>
                     
                        <?php  } ?>
                        </tbody>
                    </table>
                    <div class='row'>
                        </div>
                    <div class='col'>
                        <a class='btn btn-success' href='<?= URL ?>categorie' role='button'>Ajouter catégorie</a>
                    </div>
                </div>
    </section>
</div>

