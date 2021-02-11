<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>SHOP</title>
  <link rel="stylesheet" href="pageP.css">

</head>

<body>

  <div class="container">

    <div class="navbar">
      <img src="navbar.png" class="logo">
      <nav>
        <ul>
          <li><a href="">ACCUEIL</a></li>
          <li><a href="">SHOP BY CATEGORY</a>
          </li>
          <li><a href="">ABOUT</a></li>
        </ul>
      </nav>

      <a href="panier.php"><img src="shopping-cart.png" class="cart"></a>
    </div>

    <section class="main">

    <?php 
    
    session_start();

    print_r($_SESSION['panier2']) ?>

      <div class="cards">

        <div class="card">
          <img src="deguisementcrabe.webp" alt="">

          <div class="card-header">
            <h1 class="title">Crabe Homme</h1>
            <h1 class="price">29.99€</h1>
          </div>
          <a href="handle_panier.php?productName=Crabe Homme">Ajouter au panier</a>
        </div>

        <div class="card">
          <img src="d-baguette.jpg" alt="">

          <div class="card-header">
            <h1 class="title">Baguette Homme</h1>
            <h1 class="price">29.99€</h1>
          </div>
          <a href="handle_panier.php?productName=Baguette Homme">Ajouter au panier</a>
        </div>

        <div class="card">
          <img src="dino.jpg" alt="" height="465px">

          <div class="card-header">
            <h1 class="title">Dinosaure Mixte</h1>
            <h1 class="price">49.99€</h1>
          </div>
          <a href="handle_panier.php?productName=Dinosaure Mixte">Ajouter au panier</a>
        </div>

        <div class="card">
          <img src="choco.png" alt="" height="465px">

          <div class="card-header">
            <h1 class="title">Chocolat Femme</h1>
            <h1 class="price">29.99€</h1>
          </div>
          <a href="handle_panier.php?productName=Chocolat Femme">Ajouter au panier</a>
        </div>

      </div>

    </section>

  </div>



</body>

</html>