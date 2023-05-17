<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/MyOrder.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function(){   
  $(".tabs").hide();  //first hide all the tab content 
  $(".tabs").first().show(); // display only the 1st tab content
  $("#tabHeader").find("a").click(function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');

    $("#" + id).show(); // show the content for relivent tabs.
    $("#" + id).siblings().hide(); // hide other tab content

    //Do your other stuffs
  });
});

</script>
</head>
<body>
<div class="container">
        <h1 class="head">My Orders</h1>
        <br>
        <br>
        <div id="tabArea">
        
    <div id="tabHeader" class="button-container">
        <a  data-id="tab1" class="button">Completed</a>
        <a  data-id="tab2" class="button">Cancelled</a>
        <a  data-id="tab3" class="button">Requested</a>
    </div>

    <div id="tabData">
        <div id="tab1" class="tabs selectedTab">
            <div id="accordion">
                
                <div class="placesx">
                    <div class="placesx-data">
                        <p><?php
        error_reporting(0);
        
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'ShoppersMart');
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Retrieve the user's orders from the database
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM orders WHERE status='delivered' ";
        $result = mysqli_query($conn, $sql);
        // Check if any orders were found
        if (mysqli_num_rows($result) > 0) {
            // Display the user's orders in a table
            echo '<table class="table table-striped">';
            echo '<thead><tr style="font-size: 24px; color:white;background-color:black;"><th>Order ID</th><th>Product</th><th>Order Date</th><th>Status</th><th>Total</th></tr></thead>';
            
            
            
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['product_id'] . '</td>';
                echo '<td>' . $row['order_date'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['total'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            // Display a message if no orders were found
            echo 'You have no orders.';
        }
        
        // Close the database connection
        mysqli_close($conn);
        ?></p>
                    </div>
                </div>
                
            </div>
        </div>
        <div id="tab2" class="tabs">
            <div>
                
                
                <p><?php
        error_reporting(0);
        
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'ShoppersMart');
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Retrieve the user's orders from the database
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM orders WHERE status='cancelled' ";
        $result = mysqli_query($conn, $sql);
        // Check if any orders were found
        if (mysqli_num_rows($result) > 0) {
            // Display the user's orders in a table
            echo '<table class="table table-striped">';
            echo '<thead><tr style="font-size: 24px;color:white;background-color:black"><th>Order ID</th><th>Product</th><th>Order Date</th><th>Status</th><th>Total</th></tr></thead>';
            
            
            
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['product_id'] . '</td>';
                echo '<td>' . $row['order_date'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['total'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            // Display a message if no orders were found
            echo 'You have no orders.';
        }
        
        // Close the database connection
        mysqli_close($conn);
        ?></p>
            </div>
        </div>
        <div id="tab3" class="tabs">
            <div>
                <p>
                <?php
        error_reporting(0);
        
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'ShoppersMart');
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Retrieve the user's orders from the database
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM orders WHERE status='pending' ";
        $result = mysqli_query($conn, $sql);
        // Check if any orders were found
        if (mysqli_num_rows($result) > 0) {
            // Display the user's orders in a table
            echo '<table class="table table-striped">';
            echo '<thead><tr style="font-size: 24px;color:white;background-color:black"><th>Order ID</th><th>Product</th><th>Order Date</th><th>Status</th><th>Total</th></tr></thead>';
            
            
            
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['product_id'] . '</td>';
                echo '<td>' . $row['order_date'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['total'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            // Display a message if no orders were found
            echo 'You have no orders.';
        }
        
        // Close the database connection
        mysqli_close($conn);
        ?>
                </p>
            </div>
        </div>
    </div>
    
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>






