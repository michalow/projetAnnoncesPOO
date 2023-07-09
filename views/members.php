<div id="wrapper">
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Membres</h1>
                <div class="table-wrapper">
                    <table>
                    <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Prénom</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Username</th>
                        <th scope='col'>Date de naissance</th>
                        <th scope='col'>Date d'inscription</th>
                        <th scope='col'>Adresse</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Télephone</th>
                        <th scope='col'>Cagnotte</th>
                        <th scope='col'>Actif</th>
                        <th scope='col'>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php foreach ($members as $member) : 
                var_dump($member); ?>
                <tr>
                    <td><?= $member->getId() ?></td>
                    <td><?= htmlentities($member->getEmail() ?? '') ?></td>
                    <td><?= htmlentities($member->getPwd() ?? '') ?></td>
                    <!-- <td><?= htmlentities($member['username'] ?? '') ?></td>
                    <td><?= htmlentities($member['date_naissance'] ?? '') ?></td>
                    <td><?= htmlentities($member['date_inscription'] ?? '') ?></td>
                    <td><?= htmlentities($member['adresse'] ?? '') ?></td>
                    <td><?= htmlentities($member['email'] ?? '') ?></td>
                    <td><?= htmlentities($member['telephone'] ?? '') ?></td>
                    <td><?= htmlentities($member['cagnotte'] ?? '') ?></td>
                    <td><?= htmlentities($member['actif'] ?? '') ?></td>
                    <td><?= htmlentities($member['is_admin'] ?? '') ?></td>
                    <td>
                        <a class='btn btn-danger' href='membre_delete.php?id=<?= $member['id'] ?>' role='button'>Supprimer</a>
                    </td>
                    <td>
                    <?php if($member['actif']==0) 
                    { ?><a class='btn btn-info' href='membre_valide.php?id=<?= $member['id'] ?>' role='button'>Valider</a><?php } ?>
                    </td>
                    <td>
                    <?php if($member['is_admin']==1) 
                    { ?><a class='' href='membre_valide.php?id=<?= $member['id'] ?>' role='button'>Admin</a><?php } ?>
                    </td> -->
                </tr>
            <?php endforeach; ?>
        </tbody>
                    <div class='row'>
                    <div class='col'>
                        <a class='btn btn-success' href='' role='button'>Ajouter catégorie</a>
                    </div>
                </div>
                </div>

        </div>
    </section>

</div>