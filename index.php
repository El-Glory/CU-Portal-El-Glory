<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <!--   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  -->  <!--  <meta name="viewport" content="width = devive-width, initial-scale=1">
    --> <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JavaScript</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/
    font-awesome.min.css">
    </head>
 <body >
   <div class="container" style="width: 27%;">
     <div class="main-login main-center">
      <img src="img/cu logo.png">
      <hr style="width: 60%">
      <h4 class="h4" style="color: #808080; font-family: 'oxygen', sans-serif;">Sign into CU Portal</h4>
      <form method="POST" action="dashboard.php" name="vform">


        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username" required >
        </div>

         <div class="form-group">
                    <input type="text" name="password" class="form-control" placeholder="Password" required>

                         <label class="password">
                             <input type="checkbox" style="width: 15px; height: 15px;">
                             <span class="label-text" style="font-family: 'oxygen', sans-serif;">Remember me</span>
                         </label>

        </div>

        <div class="form-group">

          <button type="submit" class="btn btn-md" style="font-family: 'oxygen', sans-serif;">Login</button>

        </div>

      </form>

     </div>
   </div>

   <h5 style="color:#808080; margin-top: 50px; font-family: 'oxygen', sans-serif;"><i class="fa fa-copyright"></i>2017 CU Portal</h5>
   <h5 style="color:#808080; margin-left: 570px; font-family: 'oxygen', sans-serif;">Covenant University Portal</h5>



 <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </body>
  </html>