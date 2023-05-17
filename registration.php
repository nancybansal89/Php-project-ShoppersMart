
<?php
// Set up database connection variables
error_reporting(0);
        
        // Connect to the database
    $conn = mysqli_connect('localhost', 'id20486986_root', 'ol*OMpL5S&8nCR#(', 'id20486986_tr_web_app');
        
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


 # Include cart class
 include 'Cart.php';
 # Create a cart object 
 $cartObj = new Cart();
 # Insert record into cart table
 if(isset($_POST['name']))
 {
     
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confpass']);
    $cartObj->login($name,$email,$password,$confirmpassword);
 }

// Escape user inputs to prevent SQL injection


//Insert data into table
// $sql = "INSERT INTO registration (name, email, password, confirmpassword) VALUES ('$name', '$email', '$password', '$confirmpassword')";

// if (mysqli_query($conn, $sql)) {
//   echo "<p style='font-family: Arial, sans-serif; font-size: 18px;'>Thank you for Joining ShoppersMart!! Please enter your credentials to login</p>";
// //   header("Location: https://ecommercewebvanier.000webhostapp.com/Login.php");
// // die();

// echo '<script type="text/javascript">
//           window.location = " https://ecommercewebvanier.000webhostapp.com/Login.php"
//       </script>';
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// // Close database connection
// mysqli_close($conn);
?>