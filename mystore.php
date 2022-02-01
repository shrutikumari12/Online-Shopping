<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>

           <!-----Bootstrap CDN----->
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

           <!----Fontawesome cdn----->
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
 </head>
                                            
    <?php
       
       session_start();
       if(!$_SESSION['admin']) {
         header("location:form/login.php");
       }

    ?>

<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>SHOPPING</h1></a>
    <span>
    <i class="fas fa-user-shield"></i>
      Hello,<?php echo $_SESSION['admin'];?>
      <i class="fas fa-sign-out-alt"></i>
      <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
      <a href="user/index.php" class="text-decoration-none text-white">Userpanel</a>

    </span>
  </div>
</nav>
       
         <div>
             <h2 class="text-center">ADMIN<h2>
         </div>
         <div class=" col-md-6 bg-danger text-center m-auto ">
             <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
             <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
         </div>
</body>
</html>