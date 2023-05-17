<?php
class Cart
{
    # Member variables
    private $servername = 'localhost';
    private $username = 'id20486986_root';
    private $password = 'ol*OMpL5S&8nCR#(';
    private $database = 'id20486986_tr_web_app';
    public $con;

    # Member functions

    # Database Connection in the constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password,$this->database);
        if(mysqli_connect_error())
        {
            trigger_error("failed to connect to MySQL: ". mysqli_connect_error());
        }
        else
        {
            return $this->con;
        }
    }
    
    
    public function login($name,$email,$password,$confirmpassword){
       
       $name1 = $name;
       $email1=$email;
       $password1 = password_hash('$password', PASSWORD_DEFAULT);
       $confirmpassword1 = password_hash('$confirmpassword', PASSWORD_DEFAULT);
       
        
        $query = "INSERT INTO registration (name, email, password, confirmpassword) VALUES ('$name1', '$email1', '$password1', '$password1')";
        $sql = $this->con->query($query);
         if($sql==true){
  echo "<p style='font-family: Arial, sans-serif; font-size: 18px;'>Thank you for Joining ShoppersMart!! Please enter your credentials to login</p>";
//   header("Location: https://ecommercewebvanier.000webhostapp.com/Login.php");
// die();

    echo '<script type="text/javascript">
          window.location = " https://ecommercewebvanier.000webhostapp.com/Login.php"
      </script>';
  } else {
    echo "Error: Registration not done. Try again" ;
  }

     // Close database connection
    mysqli_close($this->con);
    }
    
    
    # Insert customer data into customer table
    public function insertData($post)
    {
        // echo "test";
        $title = $_POST['title'];
        $price = $_POST['price'];
        $info = $_POST['info'];

        $query = "INSERT INTO cart(email,title,price,info) 
                            VALUES('def@gmail.com','$title','$price','$info')";
        $sql = $this->con->query($query);
        if($sql==true){
            header("Location:./home.php?page=addcart&msg1=insert");
        }
        else {
            echo 'Failed to insert';
        }
    }

    # fetch customer records for listing
    public function displayData()
    {
        $query = "SELECT * FROM cart";
        $result = $this->con->query($query);
        $data = array();
        if($result->num_rows > 0)
        {
            $data = array();
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        else 
        {
            return $data;
            echo "No found records";
        }
    }

    # fetch single customer record for editing, etc..
    public function displayRecordById($id)
    {
        $query = "SELECT * FROM cart WHERE id = '$id'";
        $result = $this->con->query($query);
        if($result->num_rows > 0)
        {           
            $row = $result->fetch_assoc(); 
            return $row;
        }
        else 
        {
            echo "Record not found";
        }
    }

    # Update customer data
    public function updateRecord($post)
    {
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $username = $_POST['username'];
        // $id = $_POST['id'];
        // if(!empty($id) &&!empty($post))
        // {
        //     $query = "UPDATE customers SET name = '$name', email = '$email', username= '$username'
        //                                     WHERE id = '$id'";
        //     $sql = $this->con->query($query);
        //     if($sql==true){
        //         header("Location:index.php?msg2=update");;
        //     }
        //     else 
        //     {
        //         echo "Failed to update";    
        //     }

        // }

    }

    # Delete a specific customer
    public function deleteRecord($id)
    {
        $query = "DELETE FROM cart WHERE id = '$id'";
        $sql = $this->con->query($query);
        if ($sql==true)
        {
            header("Location:index.php?msg3=delete");
        }
        else 
        {
            echo "Failed to delete";
        }
    } 


 function runQuery($query) {
		$result = mysqli_query($this->con,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->con,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}


}



?>
