<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>  
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style1.css">
      
    <title>Shopper's Mart 
    </title>

    <style>
        footer {
                text-align: center;
                padding: 3px;
                background-color: #43558c;
                color: white;
                margin-top: auto;
                }
        main{
            flex:1;
        }

    </style>
</head>
<body>
    

    <header>
      <div class="logo"><a href="#">Shopper's Mart</a></div>
      <div class="menu">
        <a href="#">
          <ion-icon name="close" class="close"></ion-icon>
        </a>
  
      
      </div>
      <!-- <div class="search">
  
        <a href=""><input type="text" placeholder="search products" id="input">
          <ion-icon class="s" name="search"></ion-icon>
        </a>
      </div> -->
      <div class="heading">

        <div>
        <?php
            # include Navbar
            include_once('./partials/navbar.php');
        ?>
    </div>
        
      </div>
      <div class="heading1">
        <ion-icon name="menu" class="ham"></ion-icon>
      </div>
    </header>

    <main>
        <?php
            # inlude content here
            if(!(isset($_GET['page']))){
                include_once('./mainpage.php');
            }
            else 
            {
                $page = $_GET['page'];
                // echo $page;
                switch ($page) {
                    case 'home':
                        # code...
                        include_once('./mainpage.php');
                        break;
                    // case 'addcart':
                    // 	include_once('./mainpage.php?msg1=insert');
                    // 	break;
                    case 'kitchen':
                        include_once('./kitchen.php');
                        break;
                    case 'shop':
                            include_once('./shop.php');
                            break;
                    case 'mencloth':
                            include_once('./mencloth.php');
                            break;       
                    case 'about':
                        # code...
                        include_once('./about.php');
                        break;
                    case 'contact':
                        # code...
                        include_once('./contact.php');
                        break;
                    case 'products':
                        # code...
                        include_once('./products.php');
                        break;
                    case 'gadgets':
                        include_once('./gadgets.php');
                        break;
                    case 'cart':
                        include_once('./MyOrder.php');
                        break;
                    default:
                        # code...
                        echo "<h4 style='text-align:center; color:red'>404: Oops page not found...</h4>";
                        break;
                }
            }
            
        ?>
    </main>   

<footer>
	<?php
            # inlude Navbar
            include_once('./partials/footer.php');
        ?>
</footer>
</body>
</html>