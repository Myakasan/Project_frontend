<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Titillium+Web" rel="stylesheet">
  <title>L33T SH0PPING</title>
</head>

<body>
  <header class="img-fluid container-fluid">
    <?php include('../script/headerpage.php'); ?>
  </header>

  
  <nav>
    <?php include('../script/navpage.php'); ?>
  </nav>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent">
      <li class="breadcrumb-item text-secondary">Acceuil</li>
      <li class="breadcrumb-item text-secondary">Hommes</li>
      <li class="breadcrumb-item text-secondary">Tee-shirts</li>
      <li class="breadcrumb-item active text-danger" aria-current="page">Lord of the drinks</li>
    </ol>
  </nav>
  <hr>
  <div class="article-details">
    <div class="container-fluid">
  <div class="row">
    <div class="col">
      <img class="rounded img-thumbnail" src="../img/tee1.jpg" alt="">
    </div>
    <div class="col">
      <h4>Detail du produit</h4>
      <h5>T-shirt Homme Lord of The Drinks</h5>
      <p>Un classique sans compromis : vous allez adorer ce T-shirt simple et classique.
         Un basique à porter en toutes occasions.</p>
      <ul>
        <li>Finitions haut de gamme avec doubles coutures</li>
        <li>En tailles 3XL et 4XL, seules les couleurs suivantes sont proposées par le fabricant : blanc, noir, bleu marine, rouge et gris chiné</li>
        <li>Coupe droite</li>
        <li>Tissu résistant : 185 g/m²</li>
        <li>Composition : 100 % coton (sauf en gris chiné : 85 % coton, 15 % viscose)</li>
      </ul>
    </div>
    <div class="col">
      <h3>Choisissez la couleur :</h3>
      <div class="btn-toolbar" role="toolbar" aria-label="Color Butt">
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-light btn-lg rounded-circle">LG</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg rounded-circle">MG</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-secondary btn-lg rounded-circle">DG</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-dark btn-lg rounded-circle">DK</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-danger btn-lg rounded-circle">DR</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-primary btn-lg rounded-circle">MB</button>
        </div>
      </div>
      <h3>Choisissez la taille :</h3>
      <div class="btn-toolbar" role="toolbar" aria-label="Size Butt">
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">S</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">M</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">L</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">XL</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">XXL</button>
        </div>
        <div class="btn-group mr-2 mb-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-sucess btn-lg">XXXL</button>
        </div>
      </div>
      <h3>Choisissez la quantité :</h3>
      <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="button" class="btn btn-danger btn-lg btn-block">Ajouter au panier</button>
    </div>
  </div>
    <h1 class="mb-3" style="text-align: center;">Ces articles pourraient vous intérésser !</h1>
  <div class="row">
    <div class="col">
      SUGG
    </div>
    <div class="col">
      SUGG
    </div>
    <div class="col">
      SUGG
    </div>
  </div>
  </div>
  </div>



  <footer class="class">
    <?php include('../script/footerpage.php'); ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script/script.js" async charset="utf-8"></script>
</body>

</html>
