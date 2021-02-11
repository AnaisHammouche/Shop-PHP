<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours en ligne</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="skeletton.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="four columns logo">
          <img src="img/coding_factory.jpg" id="logo">
        </div>
        <div class="two columns u-pull-right">
          <ul>
            <li class="submenu">
              <img src="shopping-cart.png" id="img-cart">
              <div id="cart">

                <table id="cart-table" class="u-full-width">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Article</th>
                      <th>Prix</th>
                      <th>Qté</th>
                      <th></th>
                    </tr></thead>
                    <tr>
                    <th scope="row"></th>
                    <td><?php $select = array();
$select['id'] = "phlevis501";
$select['qte'] = 2;
$select['taille'] = "56";
$select['prix'] = 84.95;

echo $select ?></td>
                    <td></td>
                    <td><form action="panier.php" method="get">
<button type="reset">Supprimer</button>
</form>  </td>
                      
</tr>

                  <tbody>
                  <?php

session_start();

function creationPanier(){

    if(!isset($_SESSION['panier'])){

        $_SESSION['panier'] = array();
        $_SESSION['panier']['idproduit'] = array();
$_SESSION['panier']['qte'] = array();
$_SESSION['panier']['prix'] = array();
$_SESSION['panier']['verrou'] = false;


    }
    return true;
}


function ajouterArticle($idproduit,$qte,$prix) {

    if (creationPanier() && !isverrou()){
        $position_produit = array_search($idproduit, $_SESSION['panier']['idproduit']);
    }



}

// ARTICLES D'EXEMPLES
// $select = array();
// $select['id'] = "phlevis501";
// $select['qte'] = 2;
// $select['prix'] = 84.95;

/* On vérifie l'existence du panier, sinon, on le crée */
if(!isset($_SESSION['panier']))
{
/* Initialisation du panier */ 

$_SESSION['panier'] = array();
$_SESSION['panier']['qte'] = array();
$_SESSION['panier']['prix'] = array();

}

/* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
array_push($_SESSION['panier']['id_article'],$select['id']);
array_push($_SESSION['panier']['qte'],$select['qte']);
array_push($_SESSION['panier']['prix'],$select['prix']);
?>

<!-- Affichons maintenant le contenu du panier : -->

<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>




                  </tbody>
                </table>
                <a href="#" id="connecter" class="button u-full-width">SE CONNECTER</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <form id="search-item" class="search-form">
    <input type="text" placeholder="Rechercher ...">
  </form>

  <div id="courses-list">

    <h1>Cours en ligne</h1>
    <div class="courses__container"></div>
    <div id="no_course" class="hidden">Aucun cours n'est disponible pour votre recherche</div>
  </div>

  <div class="courses__container">
    <div class="course__item">
      <figure class="course_img">
        <img src="img/courses/ux_ui.jpg">
      </figure>
      <div class="info__card">
        <h4>UX/UI</h4>
        <figure class="mark m_4">
          <img src="img/rates.png">
        </figure>
        <p>
          <span class="price">200 €</span>
          <span class="discount">9.99 €</span>
        </p>
        <p>
          Disponible: <span class="stock">10</span>
        </p>
        <a href="?action=ajout&amp;i=<?php echo $s->title; ?>&amp;q=&amp;p=" class="add-to-cart" data-id="1"><i class="fa fa-cart-plus"></i>Ajouter au panier</a>
      </div>
    </div>

    <div class="course__item">
      <figure class="course_img">
        <img src="img/courses/php_8.png">
      </figure>
      <div class="info__card">
        <h4>PHP 8</h4>
        <figure class="mark m_3">
          <img src="img/rates.png">
        </figure>
        <p>
          <span class="price">200 €</span>
          <span class="discount">9.99 €</span>
        </p>
        <p>
          Disponible: <span class="stock">10</span>
        </p>
        <a href="#" class="add-to-cart" data-id="2"><i class="fa fa-cart-plus"></i>Ajouter au panier</a>
      </div>
    </div>

    <div class="course__item">
      <figure class="course_img">
        <img src="img/courses/react_js.png">
      </figure>
      <div class="info__card">
        <h4>React JS</h4>
        <figure class="mark m_2">
          <img src="img/rates.png">
        </figure>
        <p>
          <span class="price">200 €</span>
          <span class="discount">9.99 €</span>
        </p>
        <p>
          Disponible: <span class="stock">5</span>
        </p>
        <a href="#" class="add-to-cart" data-id="3"><i class="fa fa-cart-plus"></i>Ajouter au panier</a>
      </div>
    </div>

    <div class="course__item">
      <figure class="course_img">
        <img src="img/courses/node_js.jpg">
      </figure>
      <div class="info__card">
        <h4>Node JS</h4>
        <figure class="mark m_5">
          <img src="img/rates.png">
        </figure>
        <p>
          <span class="price">200 €</span>
          <span class="discount">9.99 €</span>
        </p>
        <p>
          Disponible: <span class="stock">3</span>
        </p>
        <a href="#" class="add-to-cart" data-id="4"><i class="fa fa-cart-plus"></i>Ajouter au panier</a>
      </div>
    </div>

    <div class="course__item">
      <figure class="course_img">
        <img src="img/courses/my_sql.png">
      </figure>
      <div class="info__card">
        <h4>MySQL</h4>
        <figure class="mark m_4">
          <img src="img/rates.png">
        </figure>
        <p>
          <span class="price">200 €</span>
          <span class="discount">9.99 €</span>
        </p>
        <p>
          Disponible: <span class="stock">2</span>
        </p>
        <a href="#" class="add-to-cart" data-id="5"><i class="fa fa-cart-plus"></i>Ajouter au panier</a>
      </div>
    </div>
  </div>

  <footer>
  </footer>

</body>
</html> -->