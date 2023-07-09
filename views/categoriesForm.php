<div class='row'>

<h1 class='col-md-12 text-center border border-dark bg-primary text-white'>Catégorie Formulaire</h1>
</div>
<div class='row'>
    <form method='post' action=''>
        <input type='hidden' name='id' value='<?= isset($categorie) ? $categorie->getId() : '' ?>'>
        <div class='form-group my-3'>
            <label for='nom'>Nom</label>
            <input type='text' name='nom' class='form-control' id='nom' placeholder='Enter nom' required autofocus value='<?= isset($categorie) ? $categorie->getName() : '' ?>'>
            <!-- isset with ternary operator isset() ? : -->
        </div>
        <div class='form-group my-3'>
            <label for='description'>Description</label>
            <input type='text' name='description' class='form-control' id='description' placeholder='Enter description' value='<?= isset($categorie) ? $categorie->getDescription() : '' ?>'>
        </div>
        <button type='submit' class='btn btn-primary my-3' name='submit'>Envoyer</button>
    </form>
</div>