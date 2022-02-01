<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="row"> 
    <div class="col-md-6 mt-5 m-auto bg-white shadow font-monopspace border border-info"> 
    <P class = "text-warning text-center fs-3 fw-bold my-3">User LOGIN</P>  
    <form action="login1.php" method = "POST">
     <div class="mb-3">
      <label for="">User Name:</label> 
      <input type="text" name = "name" placeholder = "Enter User Name" class = "form-control">  
     </div>
     <div class="mb-3">
      <label for="">User Password:</label> 
      <input type="password" name = "password" placeholder = "Enter User Name" class = "form-control">  
     </div>
     <div class = "mb-3">
     <button class = "w-100 bg-danger fs-4 text-white">LOGIN</button>
    </div>
     <div class = "mb-3">
     <button name = "submit" class = "w-100 bg-warning fs-4 text-white"><a href = "register.php" class = "text-decoration-none text-white">REGISTER</a></button>
    </div>
   
    </form>  
     </div> 
     </div> 
     </div>          
</body>
</html>