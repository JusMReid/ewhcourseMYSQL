<?php
  $hrs1hr = (60*60); //3600
  $hrs24 = (60*60*24);
  $hrs1year = (60*60*24*365);
  $hrs1week = (60*60*24*7);

  setcookie("id", "1234", time()*$hrs24);

  echo nl2br ($_COOKIE['id']."</br>");

  //To delete a cookie just set it to a time in the past
  setcookie("id", "", time()-$hrs1hr);

  echo $_COOKIE['id'];
 ?>
