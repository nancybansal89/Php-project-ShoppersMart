<?php
 # Include customer class
 include 'Cart.php';
 # Create a customers object 
 $customerObj = new Cart();
 # Edit customer record
 // if(isset($_GET['editId']) && !empty($_GET['editId']))
 // {
 //    $editId = $_GET['editId'];
    // $customer = $customerObj->displayData();
 // }
 // # Update record 
 // if(isset($_POST['update']))
 // {
 //    $customerObj->updateRecord($_POST);
 // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style1.css">
    <title>Add Customer</title>
</head>
<body class="page">
    
    <div class="container">
<div class="card text-center" style="padding: 15px;">
        <h3 style="color:darkmagenta;">Cart List</h3>
        <hr class="rounded">
    </div><br>
     <button class="btn btn-primary toggleBtn" type="button">Toggle Table</button>
    <div class="panel panel-default">
      <div class="panel-body ustBorder">
        <div class="row">
      <div class="col-md-12">
      <table class="table">
          <thead class="thead">
              <tr class="tr">
                 <th class="th">Id</th>
            <th class="th">Email</th>
            <th class="th">Title</th>
            <th class="th">Price</th>
            <th class="th">Detail</th>
            <th class="th">Action</th>
              </tr>
          </thead>
          <tbody>

            <?php
                $customers = $customerObj->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
                foreach ($customers as $key=>$value) {
          ?>

            <tr class="tr">
                
                <div id="product-grid">

		<div class="product-item">
			<form method="post" action="cart_list.php?action=add&code=<?php echo $customers[$key]["code"]; ?>">
		<td class="td" data-label='ID'>	<img src="<?php echo $customers[$key]["image"]; ?>" width="80px" height="60px"></td>
			<div class="product-tile-footer">
		<td class="td" data-label='Quantity'><div class="product-title"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><?php echo $customers[$key]["code"]; ?></div></td>
			<td class="td" data-label='Title'><div class="product-price"><?php echo "$".$customers[$key]["name"]; ?></div></td>
		<td class="td" data-label='Price'><div class="cart-action"><?php echo "$".$customers[$key]["price"]; ?> </div></td>
		<td class="td" data-label='Detail'>	<input type="submit" value="Add to Cart" class="btnAddAction" /></td>
		<td class="td" data-label='Action'><div class="cart-action"><?php echo "#"; ?></div> </td>
			</div>
			</form>
		</div>
</div>
                
            </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
      </div>
    </div>
</div>
    </div>
</body>
</html>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('tbody tr:odd').addClass('ttable');
    $('tbody tr:even').addClass('tt3table');
   $(".toggleBtn").click(function () {
        $("thead tr").toggleClass("trAltCizgi");
        $("thead").toggleClass("thead");
        $("tr").toggleClass("tr");
        $("td").toggleClass("td");
        $("th").toggleClass("th");
        $("tbody").toggleClass("tbody");
        $("tbody tr:odd").toggleClass('ttable');
        $("tbody tr:even").toggleClass('tt3table');
    });
});
</script>