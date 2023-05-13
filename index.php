<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <div class="container d-flex align-items-center 
  justify-content-center ">
<div class="card">
    <!-- card header -->
    <div class="card-header">
        <h3 class="text-center">Sign Up</h3>
    </div>
     <!-- card  body-->
     <div class="card-body">

     <form action="code.php" method="post" onSubmit="return validate();">
        <!-- first field -->
        <div class="input-group mb-3">
     <span class="input-group-text" id="basic-addon1">
        <i class="fa-solid fa-user"></i></span>
     <input type="text" class="form-control"
      placeholder="Enter your username" aria-label="Username" 
      required="required" autocomplete="off" name="username"
      aria-describedby="basic-addon1">
   </div>
         <!--second  field -->
         <div class="input-group mb-3">
     <span class="input-group-text" id="basic-addon1">
        <i class="fas fa-key"></i></span>
     <input type="password" class="form-control"
      placeholder="Enter your password" aria-label="Password" 
      required="required" autocomplete="off" name="password"
      aria-describedby="basic-addon1" id="password">
   </div>
          <!-- third field -->
          <div class="input-group mb-3">
     <span class="input-group-text" id="basic-addon1">
        <i class="fas fa-lock"></i></span>
     <input type="password" class="form-control"
      placeholder="Confirm password" aria-label="confirm_Password" 
      required="required" autocomplete="off" name="confirm_Password"
      aria-describedby="basic-addon1" id="confirm_password" >
   </div>
          <!-- signup button -->
          <div class="form-group">
            <input type="submit"  value="submit" name="register" value="Sign Up" class="btn registration_btn">
          </div>
     </form>
     </div>
      <!-- card footer -->
      <div class="card-footer text-light  text-center signup">
        Alredy have an account? <a href="signin.php">Sign In</a>
      </div>
</div>
  </div>
  <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
        
     </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>