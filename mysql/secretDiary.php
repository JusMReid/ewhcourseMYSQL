<?php

 ?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>SecretDiary</title>

   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet" href="styles.css">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <style media="screen">
   .logInButton{
     float: left;
     margin-left: 600px;
   }
   .divider{
     float: left;
     margin: 15px 3px;
   }
   .registerButton{
     margin: 9px 0;
     float: right;
   }
   </style>
 </head>
 <body>
   <div class="container-fluid" id="body">
     <div class="container navbar navbar-default">
       <div class="navbar-header">
         <a class="navbar-brand" href="#">SecretDiary</a>
         <button type="button" class="btn btn-default navbar-btn logInButton">Log In</button>
         <div class="divider">|</div>
         <button type="button" class="btn btn-default navbar-btn registerButton">Sign Up</button>
       </div>
     </div>
   </div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">

   </script>

   <script type="text/javascript">
   $(".logInButton").click(function(event) {
     /* Act on the event */
     window.location = "logInPage.php" + this.id;
   });
     $(".registerButton").click(function(event) {
       /* Act on the event */
       window.location = "registerPage.php" + this.id;
     });
   </script>
 </body>
</html>
