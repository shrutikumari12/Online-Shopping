<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php
     include 'header.php';
    ?>
</head>
<body>
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row">
    
    <h1 class="text-warning font-monospace text-center my-3">LAPTOPS</h1>
    <?php
      include 'config.php';
      $Record = mysqli_query($con, "select * from tblproduct");
      while($row = mysqli_fetch_array($Record)){
          $check_page = $row['PCategory'];
          if( $check_page === 'Laptop'){

        

        echo "
<div class='col-md-6 col-lg-4 m-auto mb-3'>
<form action = 'insertcart.php' method = 'POST'>
<div class='card m-auto' style='width: 18rem;'>
<img src='../product/".$row ['Pimage']."' class='card-img-top m-auto' style = 'width:170px; height:300px;'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>".$row ['PName']."</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS:".$row ['PPrice']."</p>
    <input type = 'hidden' name = 'PName' value = ".$row ['PName']."> 
    <input type = 'hidden' name = 'PPrice' value = ".$row ['PPrice'].">
    <input type='number' name = 'PQuantity' value = ' min = '1' max = '20'' placeholder='Quantity'><br><br>
    <input type = 'submit' name = 'addCart' class = 'btn btn-warning text-white w-100' value = 'Add To Cart'>
   
  </div>
</div>
</form>
</div>
";
}
}
?>
</div>
</div>
</div>
    
    <?php
       include 'footer.php';
    ?>
</body>
</html>