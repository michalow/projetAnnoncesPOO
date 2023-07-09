<div id="wrapper">

    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Page d'accueil</h1>
                <div class="table-wrapper">
                        <?php
                    
                        foreach ($annonces as $annonce): 
                           /*  var_dump($annonce); */
                           ?>
                           <div><?= $annonce->getId() ?><div>
                             <div><?= $annonce->getTitle() ?></div> 
                             <div><?= $annonce->getDescription() ?></div>
                             <div><?= $annonce->getPriceProduct() ?></div>
                             <div><img src="<?= $annonce->getUrl() ?>" alt="" width="150" height="150"></div>
                            <div><?= $annonce->getState() ->getNameState() ?></div>
                        <?php  endforeach;  ?>
                </div>
        </div>
    </section>

</div>

</body>
</html>

