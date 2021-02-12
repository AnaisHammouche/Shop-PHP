<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Panier</title>
    <link rel="stylesheet" href="pageP.css">
    <div class="container">
</head>

<body>

    <?php

    session_start();

    foreach($_SESSION['panier2'] as $key => $value): ?>
        
        

    <?php endforeach; ?>
    <thead> PANIER
        <tr>
            <th></th>
            <th>Articles</th>
            <th>Qté</th>
            <th>Prix</th>
            <th>TOTAL</th>
            <th></th>
        </tr>
        <th scope="row">
            <form action="panier.php" method="get">
                <button type="reset">Supprimer</button>
               <button href='login.php' type="submit">Valider ma commande</button>
        </th>
    </thead>
    </form>
    <?php

    /*     function creationPanier()
    {

        if (!isset($_SESSION['panier'])) {

            $_SESSION['panier'] = array();
            $_SESSION['panier']['idProduit'] = array();
            $_SESSION['panier']['qte'] = array();
            $_SESSION['panier']['prix'] = array();
            $_SESSION['panier']['verrou'] = false;
        }
        return true;
    }
 */
    /* 
    function ajouterArticle($idproduit, $qte, $prix)
    {

        if (creationPanier() && !isverrou()) {
            $position_produit = array_search($idproduit, $_SESSION['panier']['idProduit']);

            if ($position_produit !== false) {
                $_SESSION['panier']['idProduit'][$position_produit] += $qte;
            } else {
                array_push($_SESSION['panier']['idProduit'], $idProduit);
                array_push($_SESSION['panier']['qte'], $select['qte'], $qte);
                array_push($_SESSION['panier']['prix'], $select['prix'], $prix);
            }
        } else {
            echo "ERREUR";
        }
    } */


    /*     function ModifQte($idProduit, $qte)
    {
        if (creationPanier() && !isverrou()) {
            if ($qte > 0) {
                $position_produit = array_search($_SESSION['panier']['idProduit'], $idProduit);

                if ($position_produit !== false) {
                    $_SESSION['panier']['idProduit'][$position_produit] = $qte;
                }
            } else {
                supprProd($idProduit);
            }
        } else {
            echo "ERREUR";
        }
    }
 */

    /*     function supprArticle($idProduit)
    {

        if (creationPanier() && !isverrou()) {

            $tmp = array();
            $tmp['id_article'] = array();
            $tmp['qte'] = array();
            $tmp['prix'] = array();
            $tmp['verrou'] = array();
        } else {
            echo 'ERREUR';
        }
    }
 */
    // function pTotal($qte,$prix) {

    //     $total = 0;
    //     $montant = $qté * $prix;
    //   $total = $qté + $total;

    //     $prixTotal = $qte * $prix
    // }


    function modif_qte($idProduit, $qte)
    {
        /* On compte le nombre d'articles différents dans le panier */
        $nb_articles = count($_SESSION['panier']['id_article']);
        /* On initialise la variable de retour */
        $ajoute = false;
        /* On parcoure le tableau de session pour modifier l'article précis. */
        for ($i = 0; $i < $nb_articles; $i++) {
            if ($idProduit == $_SESSION['panier']['id_article'][$i]) {
                $_SESSION['panier']['qte'][$i] = $qte;
                $ajoute = true;
            }
        }
        return $ajoute;
    }


    ?>

    </div>
</body>

</html>