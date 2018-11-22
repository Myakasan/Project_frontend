<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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

  <div class="monPanierResponsive">
    <h1>Shopping Cart</h1>

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Price</label>
      <label class="product-quantity">Quantity</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
      </div>
      <div class="product-details">
        <div class="product-title">Dingo Dog Bones</div>
        <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
      </div>
      <div class="product-price">12.99</div>
      <div class="product-quantity">
        <input type="number" value="2" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Remove
        </button>
      </div>
      <div class="product-line-price">25.98</div>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
      </div>
      <div class="product-details">
        <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
        <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
      </div>
      <div class="product-price">45.99</div>
      <div class="product-quantity">
        <input type="number" value="1" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Remove
        </button>
      </div>
      <div class="product-line-price">45.99</div>
    </div>

    <div class="totals">
      <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">71.97</div>
      </div>
      <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
      </div>
      <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">90.57</div>
      </div>
    </div>

        <button class="checkout">Checkout</button>

  </div>

  </div>

  <footer>
    <?php include('../script/footerpage.php'); ?>
  </footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../script/script.js" async charset="utf-8"></script>
</body>

</html>
