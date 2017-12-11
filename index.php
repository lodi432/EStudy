<?php

include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerfull.php';
include 'includes/leftbar.php';
?>






  <!-- Main Content -->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Featured Products</h2>
      <div class="col-md-3">
         <h4>Levis Jeans</h4>
         <img src="images/products/levis.jpg" alt="Levis Jeans" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Addidas Football</h4>
         <img src="images/products/football.jpg" alt="Addidas Football" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Hoodie</h4>
         <img src="images/products/hoodie.jpg" alt="Hoodie" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Polo Shirt</h4>
         <img src="images/products/poloshirt.png" alt="Polo Shirt" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Nice Purse</h4>
         <img src="images/products/purse.jpg" alt="Random Purse" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$42.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Men's Watches</h4>
         <img src="images/products/menswatch.jpg" alt="Men's Watches" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$82.99</s></p>
         <p class="price">Our price: 59.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>

      <div class="col-md-3">
         <h4>Levis Jeans</h4>
         <img src="images/products/levis.jpg" alt="Levis Jeans" class="img-control"/>
         <p class="list-price text-danger">List Price <s>$52.99</s></p>
         <p class="price">Our price: 29.99</p>
         <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
           Details</button>
      </div>
    </div>
  </div>

  <?php

  include 'includes/detailsmodal.php';
  include 'includes/rightbar.php';
  include 'includes/footer.php';


  ?>
