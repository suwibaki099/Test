<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PEDRO Footwear</title>
    <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/women.css">
  <link rel="icon" href="images/logo-ccs-60.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/rose-icon64x64.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="white"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="ITST 304">
  <meta name="msapplication-TileImage" content="images/rose-icon96x96.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body>
    <div class="container">
      <h1>PEDRO Footwear</h1>

      <nav>
        <ul>
         <li><a href="index.html">Home</a></li>
          <li><a href="sale.php">Sale</a></li>
          <li><a href="men.html">Men</a></li>
          <li><a href="women.html">Women</a></li>
          <li><a href="kids.html">Kids</a></li>
        </ul>
      </nav>
    </div>
    <main>
      </nav>
          <div class="container-fluid">

            <div class="jumbotron">
              <h1 class="text-center">Men</h1>
              <p class="text-center">“One thing I've learned is be comfortable in your skin, and more importantly, be comfortable in your shoes.”
                — Octavia Spencer.</p>
            </div>
          </div>
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men.jpg" class="img-thumbnail grayscale" id="myBtn">
                  <figcaption>Black Boots<br>$89.60</figcaption>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <div><img src="images/men.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Boots</h2><!--name of product-->
                            <h3>$89.60</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men1.jpg" class="img-thumbnail grayscale" id="myBtn2">
                  <figcaption>Slippers<br>$70.90</figcaption>

                        <!-- The Modal -->
                        <div id="myModal2" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close2">&times;</span>
                            <div><img src="images/men1.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Slippers</h2><!--name of product-->
                            <h3>$70.90</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men2.jpg" class="img-thumbnail grayscale" id="myBtn3">
                  <figcaption>Leather Slipper<br>$80.60</figcaption>

                        <!-- The Modal -->
                        <div id="myModal3" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close3">&times;</span>
                            <div><img src="images/men2.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Leather Slipper</h2><!--name of product-->
                            <h3>$80.60</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men3.jpg" class="img-thumbnail grayscale" id="myBtn4">
                  <figcaption>Sandal Slipper<br>$83.70</figcaption>

                        <!-- The Modal -->
                        <div id="myModal4" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close4">&times;</span>
                            <div><img src="images/men3.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Sandal Slipper</h2><!--name of product-->
                            <h3>$83.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men4.jpg" class="img-thumbnail grayscale" id="myBtn5">
                  <figcaption>House Slipper<br>$60.80</figcaption>

                        <!-- The Modal -->
                        <div id="myModal5" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close5">&times;</span>
                            <div><img src="images/men4.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>House Slipper</h2><!--name of product-->
                            <h3>$60.80</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men5.jpg" class="img-thumbnail grayscale" id="myBtn6">
                  <figcaption>Black Rubber Shoes<br>$89.80</figcaption>

                        <!-- The Modal -->
                        <div id="myModal6" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close6">&times;</span>
                            <div><img src="images/men5.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Black Rubber Shoes</h2><!--name of product-->
                            <h3>$89.80</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men6.jpg" class="img-thumbnail grayscale" id="myBtn7">
                  <figcaption>Orange Rubber Shoes<br>$89.80</figcaption>

                        <!-- The Modal -->
                        <div id="myModal7" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close7">&times;</span>
                            <div><img src="images/men6.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Orange Rubber Shoes</h2><!--name of product-->
                            <h3>$89.80</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men7.jpg" class="img-thumbnail grayscale" id="myBtn8">
                  <figcaption>Black Leather Shoes<br>$89.70</figcaption>

                        <!-- The Modal -->
                        <div id="myModal8" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close8">&times;</span>
                            <div><img src="images/kid1.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Black Leather Shoes</h2><!--name of product-->
                            <h3>$89.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men8.jpg" class="img-thumbnail grayscale" id="myBtn9">
                  <figcaption>Dark Brown Leather Shoes<br>$89.70</figcaption>

                        <!-- The Modal -->
                        <div id="myModal9" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close9">&times;</span>
                            <div><img src="images/men8.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Dark Brown Leather Shoes</h2><!--name of product-->
                            <h3>$89.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men9.jpg" class="img-thumbnail grayscale" id="myBtn10">
                  <figcaption>White Boots<br>$89.90</figcaption>

                        <!-- The Modal -->
                        <div id="myModal10" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close10">&times;</span>
                            <div><img src="images/men9.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>White Boots</h2><!--name of product-->
                            <h3>$89.90</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men10.jpg" class="img-thumbnail grayscale" id="myBtn11">
                  <figcaption>White Shoes<br>$89.60</figcaption>

                        <!-- The Modal -->
                        <div id="myModal11" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close11">&times;</span>
                            <div><img src="images/men10.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>White Shoes</h2><!--name of product-->
                            <h3>$89.60</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men11.jpg" class="img-thumbnail grayscale" id="myBtn12">
                  <figcaption>Leather Shoes<br>$89.70</figcaption>

                        <!-- The Modal -->
                        <div id="myModal12" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close12">&times;</span>
                            <div><img src="images/men11.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Leather Shoes</h2><!--name of product-->
                            <h3>$89.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men13.jpg" class="img-thumbnail grayscale" id="myBtn13">
                  <figcaption>Bed Slippers<br>$68.90</figcaption>

                        <!-- The Modal -->
                        <div id="myModal13" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close13">&times;</span>
                            <div><img src="images/men13.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Bed Slipper</h2><!--name of product-->
                            <h3>$68.90</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/men14.jpg" class="img-thumbnail grayscale" id="myBtn14">
                  <figcaption>Brown Leather Shoes<br>$89.70</figcaption>

                        <!-- The Modal -->
                        <div id="myModal14" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close14">&times;</span>
                            <div><img src="images/men14.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Brown Leather Shoes</h2><!--name of product-->
                            <h3>$89.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
            </div>        
<script src="js/app.js"></script>
  </body>
</html>