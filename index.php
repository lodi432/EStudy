<!DOCTYPE html>

<!DOCTYPE html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1", user-scaleable=no>
<html>
<head>
  <!-- jQuery (potrebno za Bootstrap's JavaScript pluginove) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Trgovina Shop</title>
  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
  <!--Navigation bar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Trgovina Shop</a>
      <ul class ="nav navbar-nav">
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
           <ul class="dropdown-menu role" role="menu">
             <li><a href="#">Shirts </a></li>
             <li><a href="#">Pants </a></li>
             <li><a href="#">Shoes </a></li>
             <li><a href="#">Accessories </a></li>
           </ul>
         </li>
      </ul>
     </div>
   </nav>

   <!-- Header -->
   <div id ="headerWrapper">
   <div id ="back-flower"></div>
   <div id="logotext"></div>
   <div id ="for-flower"></div>
   </div>

  <div class="container-fluid">
    <!--Left side bar -->
  <div class="col-md-2">Left Side Bar</div>

  <!-- Main Content -->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Featured Products</h2>
      <div class="col-md-3">
         <h4>Levis Jeans</h4>
         <img src="images/products/levis.jpg" alt="Levis Jeans" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Addidas Football</h4>
         <img src="images/products/football.jpg" alt="Addidas Football" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Hoodie</h4>
         <img src="images/products/hoodie.jpg" alt="Hoodie" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Polo Shirt</h4>
         <img src="images/products/poloshirt.png" alt="Polo Shirt" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Nice Purse</h4>
         <img src="images/products/purse.jpg" alt="Random Purse" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$42.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Men's Watches</h4>
         <img src="images/products/menswatch.jpg" alt="Men's Watches" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$82.99</s></p>
         <p class="price">Our price: 59.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Levis Jeans</h4>
         <img src="images/products/levis.jpg" alt="Levis Jeans" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn-btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>
    </div>
  </div>

  <!--Right Side Bar -->
  <div class="col-md-2">Right Side Bar </div>
</div>
<script>
jQuery(window).scroll(function(){
  var vscroll = jQuery(this).scrollTop();
  jQuery('#logotext').css({
    "transform" : "translate(0px, "+vscroll/2+"px)"

  });
});
</script>
</body>
</html>
