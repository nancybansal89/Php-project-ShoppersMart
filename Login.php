
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
           
          <?php
          error_reporting(0);
  
	// Start session
	
	      
        // Connect to the database
        $conn = mysqli_connect('localhost', 'id20486986_root', 'ol*OMpL5S&8nCR#(', 'id20486986_tr_web_app');

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Check if form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get form input values
		$emailid = $_POST['emailid'];
		$password1 = $_POST['pass1'];
		// Prepare SQL statement
	$sql = "SELECT * FROM registration WHERE email = '$emailid'";
		$result = mysqli_query($conn, $sql);

		// Check if user exists
		if (mysqli_num_rows($result) > 0) {
        // User found, start session and redirect to dashboard
			$_SESSION["email"] = $emailid;
        echo '<script type="text/javascript">
          window.location = " https://ecommercewebvanier.000webhostapp.com/home.php"
      </script>';
          // $row = $result->fetch_assoc();
        // if(password_verify($password1, $row['password'])){
    		  //  echo "matched";
            // }else{
                // echo "Invalid email or password";
            // }
        }else{
             echo "Invalid email  or password";
        }
	
	}

	// Close database connection
	mysqli_close($conn);
	?>
   
            <form action="<?php $_PHP_SELF ?>" method="POST" class="sign-in-form">
              <div class="logo">
                <img src="./images/logo.png" alt="easyclass" />
                <h4>Shoppers Mart</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    id="emailid"
                     name="emailid"
                    minlength="15"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Enter Email ID</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    id="pass1"
                     name="pass1"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Enter Password</label>
                </div>

                <input type="submit" value="Sign In" name="submit" class="sign-btn" />

                
              </div>
            </form>
            
            <form action="registration.php" autocomplete="off" method="POST" class="sign-up-form">
              <div class="logo">
                <img src="./images/logo.png" alt="easyclass" />
                <h4>Shoppers Mart</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                     id="name" 
                     name="name"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Enter Full Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    id="email"
                     name="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Enter Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    id="pass"
                     name="pass"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label> Enter Password</label>
                </div>

				<div class="input-wrap">
					<input
					  type="password"
					  minlength="4"
            id="confpass" 
            name="confpass"
					  class="input-field"
					  autocomplete="off"
					  required
					/>
					<label>Confirm Password</label>
				  </div>

                <input type="submit" value="Sign Up" name="submit" class="sign-btn" />
              


                <p class="text">
                  By signing up, I agree to the
                  <a >Terms of Services</a> and
                  <a >Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./images/image1.png" class="image img-1 show" alt="" />
              <img src="./images/image2.png" class="image img-2" alt="" />
              <img src="./images/image3 copy.jpg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h3>Get all your buying problems solved today</h3>
                  <h3>Millions of items, Best Shopping experience</h3>
                  <h2>     
					Great Deals... Unbeatable value...</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
