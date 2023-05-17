<?php
 # Include cart class
 include 'Cart.php';
 # Create a cart object 
 $cartObj = new Cart();
 # Insert record into cart table
 if(isset($_POST['title']))
 {
    $cartObj->insertData($_POST);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style1.css">
    <!-- other icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- benefit icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  </head>
  

  <body>
    
    <div class="container">
    <?php
        if(isset($_GET['msg1'])=="insert")
        {
           echo "<div class='alert alert-success alert-dismissible'> 
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Success :Item added to the cart
            </div>";
        }
        if(isset($_GET['msg2'])=="update")
        {
           echo "<div class='alert alert-success alert-dismissible'> 
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 Success :Item updated to the cart
            </div>";
        }
        if(isset($_GET['msg3'])=="delete")
        {
           echo "<div class='alert alert-success alert-dismissible'> 
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 Success :Item deleted successfully
            </div>";
        }    
    
    ?>

    </div>

    <section>
      <div class="section">
        <div class="section1">
          <div class="img-slider">
            <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img">
            <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
          </div>
  
        </div>


        
        <section class="section benefits">
          <div class ="benefit-center box">
            <div class="benefit">
              <span class="icon"><i class="material-icons" style="font-size:36px">time_to_leave</i></span>
              <h4>Free Shipping</h4>
              <span class="text">Capped at $16 per order</span>
            </div>

            <div class="benefit">
              <span class="icon"><i class="material-icons" style="font-size:36px">inbox</i></span>
              <h4>10-Day Returns</h4>
              <span class="text">Shop without any fear</span>
            </div>

            <div class="benefit">
              <span class="icon"><i class="material-icons" style="font-size:36px">phone_in_talk</i></span>
              <h4>24/7 Support</h4>
              <span class="text">We are always there to help you</span>
            </div>
          </div>
        </section>


        <div id="section2" class="section2">
          <div class="container">
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
                  

            <form name="myForm" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
              <div class="name">SHOES</div>
              <input type="hidden" class="form-control" name="title" value="Nike Shoes">
              <div class="price">$5</div>
               <input type="hidden" class="form-control" name="price" value="5">
              <div class="info">All sizes available. 20 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 20 left in stock">
              
              <div class="cart" onclick="myForm.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>
            </div>
          </form>


              
            </div>
            <div class="items">
              <div class="img img2"><img src="https://images.pexels.com/photos/3649765/pexels-photo-3649765.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
              
            <form name="myForm1" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
              <div class="name">MEN's T-SHIRT</div>
              <input type="hidden" class="form-control" name="title" value="MEN T-SHIRT">
              <div class="price">$6.34</div>
               <input type="hidden" class="form-control" name="price" value="6.34"/>
              <div class="info">All sizes available. 10 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 10 left in stock"/>
              <div class="cart" onclick="myForm1.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>
              
            </div>
          </form>
            </div>

            <div class="items">
              <div class="img img3"><img src="https://media.istockphoto.com/photos/folded-blue-jeans-on-a-white-background-modern-casual-clothing-flat-picture-id1281304280" alt=""></div>

               <form name="myForm2" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">JEANS</div>
              <input type="hidden" class="form-control" name="title" value="JEANS">
               <div class="price">$9</div>
               <input type="hidden" class="form-control" name="price" value="9"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm2.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>              
            </div>
          </form>
            </div>


            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/8839887/pexels-photo-8839887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
           <form name="myForm3" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">WATCH</div>
              <input type="hidden" class="form-control" name="title" value="WATCH">
               <div class="price">$9.10</div>
               <input type="hidden" class="form-control" name="price" value="9.10"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm3.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            

            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/6858618/pexels-photo-6858618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
              
              <form name="myForm4" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">SMART PHONE</div>
              <input type="hidden" class="form-control" name="title" value="SMART PHONE">
               <div class="price">$820</div>
               <input type="hidden" class="form-control" name="price" value="820"/>
              <div class="info">All models available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm4.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/5552789/pexels-photo-5552789.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
              
              <form name="myForm5" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">TELEVISION</div>
              <input type="hidden" class="form-control" name="title" value="TELEVISION">
               <div class="price">$1200</div>
               <input type="hidden" class="form-control" name="price" value="1200"/>
              <div class="info">All models available. 15 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm5.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/4295985/pexels-photo-4295985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
              <form name="myForm6" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">HOODIES</div>
              <input type="hidden" class="form-control" name="title" value="HOODIES">
               <div class="price">$820</div>
               <input type="hidden" class="form-control" name="price" value="820"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm6.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://media.istockphoto.com/photos/vintage-plates-with-silver-teaspoons-picture-id184363070" alt=""></div>
              <form name="myForm7" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">DINNER SET</div>
              <input type="hidden" class="form-control" name="title" value="DINNER SET">
               <div class="price">$1820</div>
               <input type="hidden" class="form-control" name="price" value="1820"/>
              <div class="info">All sizes available. 20 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm7.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/6463348/pexels-photo-6463348.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
             <form name="myForm8" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">BLANKETS</div>
              <input type="hidden" class="form-control" name="title" value="BLANKETS">
               <div class="price">$650</div>
               <input type="hidden" class="form-control" name="price" value="650"/>
              <div class="info">All sizes available. 15 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm8.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/2659939/pexels-photo-2659939.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
              <form name="myForm9" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">LAPTOP</div>
              <input type="hidden" class="form-control" name="title" value="LAPTOP">
               <div class="price">$2050</div>
               <input type="hidden" class="form-control" name="price" value="2050"/>
              <div class="info">All models available. 30 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm9.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://media.istockphoto.com/photos/modern-kitchen-microwave-oven-picture-id1144960519" alt=""></div>
              <form name="myForm10" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">MICROWAVE</div>
              <input type="hidden" class="form-control" name="title" value="MICROWAVE">
               <div class="price">$1349</div>
               <input type="hidden" class="form-control" name="price" value="1349"/>
              <div class="info">Five colors available. 25 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm10.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://media.istockphoto.com/photos/black-coffee-maker-with-green-led-lights-picture-id177395430" alt=""></div>
              <form name="myForm11" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">COFFEE MAKER</div>
              <input type="hidden" class="form-control" name="title" value="COFFEE MAKER">
               <div class="price">$29.07</div>
               <input type="hidden" class="form-control" name="price" value="29.07"/>
              <div class="info">All brands available. 55 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm11.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/6606354/pexels-photo-6606354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
              <form name="myForm12" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">BED</div>
              <input type="hidden" class="form-control" name="title" value="BED">
               <div class="price">$120</div>
               <input type="hidden" class="form-control" name="price" value="120"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm12.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://media.istockphoto.com/photos/woman-turning-on-air-conditioner-picture-id1325708905" alt=""></div>
             <form name="myForm13" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">AIR CONDITIONER</div>
              <input type="hidden" class="form-control" name="title" value="AIR CONDITIONER">
               <div class="price">$820</div>
               <input type="hidden" class="form-control" name="price" value="820"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm13.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/5834/nature-grass-leaf-green.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
              <form name="myForm14" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">BOOK</div>
              <input type="hidden" class="form-control" name="title" value="BOOK">
               <div class="price">$420</div>
               <input type="hidden" class="form-control" name="price" value="420"/>
              <div class="info">latest editions available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm14.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/4339598/pexels-photo-4339598.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
              <form name="myForm15" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">BAG</div>
              <input type="hidden" class="form-control" name="title" value="BAG">
               <div class="price">$349</div>
               <input type="hidden" class="form-control" name="price" value="349"/>
              <div class="info">All sizes available. 5 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm15.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://media.istockphoto.com/photos/hand-of-a-lady-selecting-yellow-colored-saree-in-a-shop-picture-id1301740530" alt=""></div>
              <form name="myForm16" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">SAREE</div>
              <input type="hidden" class="form-control" name="title" value="SAREE">
               <div class="price">$8250</div>
               <input type="hidden" class="form-control" name="price" value="8250"/>
              <div class="info">All sizes available. 8 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm16.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
            <div class="items">
              <div class="img img1"><img src="https://images.pexels.com/photos/5816934/pexels-photo-5816934.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
              <form name="myForm17" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
               <div class="name">WASHING MACHINE</div>
              <input type="hidden" class="form-control" name="title" value="WASHING MACHINE">
               <div class="price">$9000</div>
               <input type="hidden" class="form-control" name="price" value="9000"/>
              <div class="info">All sizes available. 17 left in stock</div>
               <input type="hidden" class="form-control" name="info" value="All sizes available. 5 left in stock"/>
              <div class="cart" onclick="myForm17.submit();" name="cart" onmouseover=""; style="cursor: pointer;">Add To Cart</div>           
            </div>
          </form>
            </div>
          </div>
  
        </div>
      </div>
  
    </section>
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="app.js"></script>
  
  </body>
  
  </html>