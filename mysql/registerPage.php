<?php
  session_start();
  $error="";
  $eerror="";

  if (isset($_POST['registerButton'])) {
    // code...
    if(!$_POST['email']){
      $error.="</br>"."Email cannot be blank";
    }else{
      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $error.="</br>"."Invalid email address!";
      }
    }

    if(!$_POST['password']){
      $error.="</br>"."Password cannot be blank";
    }else{
      if(strlen($_POST['password']) < 8){
        $error.= "</br>"."Password must contain at least 8 characters";
      }
      if (!preg_match('`[A-Z]`', $_POST['password'])) {
        $error.="</br>"."Password must contain at least 1 capital letter";
      }
    }

    if($error){
      echo "There are error(s) in your form".$error;
    }else{
      $serverName = "localhost";
      $dbName = "secretDiary";
      $tableName = "users";
      $dbLogin= "root";
      $dbPassword = "";

      $conn = mysqli_connect($serverName,$dbLogin, $dbPassword, $dbName);
      // Check connection
      if(mysqli_connect_error() ){
        die("Could not connect to database...");
      }
      //echo "Connected successfully";

      $checkDoubleEmail = "SELECT * FROM `users` WHERE `email`=
          '".mysqli_real_escape_string($conn,$_POST['email'])."'";

      $emailCheck = mysqli_query($conn,$checkDoubleEmail);
      $emailCheckResult = mysqli_num_rows($emailCheck);
      echo $emailCheckResult;
      if (mysqli_num_rows($emailCheck) > 0) {
        // code...
        $eerror.="</br>"."Email already exists!";
        echo $eerror;
      }else{
        $registerUserQuery = "INSERT INTO `users`(`email`,`password`)
                      VALUES('".mysqli_real_escape_string($conn,$_POST['email'])."',
                          md5('".mysqli_real_escape_string($conn,$_POST['password'])."'))";

                          // VALUES('".mysqli_real_escape_string($conn,$_POST['email'])."',
                          //     md5(md5($_POST['email']).$_POST['password'])).)";

        $registerUser = mysqli_query($conn, $registerUserQuery);

        echo  "</br>"."Registration Successful! Welcome!"."</br>";

        //mysli_insert_id will return the user most recently inserted into the database
        $_SESSION['id'] = mysqli_insert_id($conn);
        print_r($_SESSION);
        //Rediret to logged-In Page
      }


    }
  }
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
 </head>
 <body>
   <div class="container-fluid" id="body">
     <div class="container navbar navbar-default">
       <div class="navbar-header">
         <a class="navbar-brand" href="SecretDiary.php">SecretDiary</a>
       </div>
     </div>

     <div class="container">

       <form method="post">
         <!-- <div class="form-group">
           <label for="inputName">Name</label>
           <input type="text" class="form-control" id="inputName" placeholder="Name...">
         </div> -->

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value=" <?php echo addSlashes($_POST['email']); ?>">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
        </div>

        <button type="submit" name="registerButton" class="btn btn-default submitRegister">Register</button>
      </form>

     </div>


   </div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">

   </script>
 </body>
</html>
