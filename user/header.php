<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-----Bootstrap CDN----->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <!----Fontawesome cdn----->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>   

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2">SHOPPING</a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="viewcart.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i></i>Cart(<?php echo $count ?>)</a>

     <span class="text-warning pe-2">
     <i class="fas fa-user-shield"></i>Hello,
     <?php
       if(isset($_SESSION['user'])){
       echo $_SESSION['user'];
       echo"
      | <a href='form/logout.php'  class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Logout</a>
           ";
      }
      else{
        echo"
      |  <a href='form/login.php'  class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Login</a>|
            ";
      }
     ?>

     |
         <a href="../mystore.php"  class="text-warning text-decoration-none pe-2">Admin</a>

     </span>
  
</nav>
</div>

<div class="bg-danger sticky-top font-monospace">
    <uL class="list-unstyled d-flex justify-content-center">
        <li><a href="Laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOP</a></li>
        <li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
        <li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
    </ul>    
</div>
</body>
</html>