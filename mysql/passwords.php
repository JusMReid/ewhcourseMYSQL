<?php

  /*
    A hash is a 1-way function that encodes our password into a very long string of numbers and letters, which is very difficult to reverse in code
  */

  echo (md5("password")."</br>");

  echo (md5("PASSWORD")."</br>");

  /* LEVEL 3 PASSWORD PROTECTION: SALTS:
    A salt is a random string of letters sand numbers
    IT SHOULD NOT BE STORED IN THE DATABASE*/4
  $salt = "CNI823IN5NHB3";

  echo ($salt.md5("password")."</br>");

  /*  LEVEL 4 PASSWORD SECURITY: INDIVIDUAL SALTS
    USING A SALT THAT IS UNIQUE TO EACH USER - i.e, their id or email..
  */

  echo (md5(md5($row['id'])."password"));
 ?>
