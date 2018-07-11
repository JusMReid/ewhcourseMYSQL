<?php

  $link = mysqli_connect("localhost","root","","ewhcourse");

  if(mysqli_connect_error() ){
    die("Could not connect to database...");
  }
  //echo "working!";

  //query the db
  // $query = "INSERT INTO `users` (`name`, `email`, `password`)
  //   VALUES('Jay', 'jay@gmail.com', 'password')";

  // $query = "UPDATE `users` SET `name` = 'Jus'
  //           WHERE `id` = 3";

  //$query = "SELECT `name` FROM users ";

  // $query = "UPDATE `users` SET `name` = 'Jay'
  //             WHERE `name` = 'JayR' ";

  // $query = "INSERT INTO `users` (name, email, password)
  //           VALUES('JR Swish', 'JR@gmail.com', 'jr6')";

  $aName = "JR O'Neil";

  $query = "SELECT `name` FROM `users`
          WHERE `name` = '".mysqli_real_escape_string($link,$aName)."'";

  $result = mysqli_query($link, $query);


  if($result){
    echo nl2br ("Num Rows: ".mysqli_num_rows($result))."<br></br>";
    while($row = mysqli_fetch_array($result)){


      print_r($row );
      echo("<br></br>");
      //echo "Works!";\
  }
  }else {
    echo "Fail";
  };

 ?>
