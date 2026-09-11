<?php
include "environment.php";
//local
if($environment == 1){
  $servername = "127.0.0.1";
  $username = "root";
  $password = "1234";
  $dbname = "cms";
}
//staging
if($environment == 2){
  $servername = "localhost";
  $username = "designs2_accreation";
  $password = "QfVbm(#s=Pp{";
  $dbname = "designs2_accreation";
}
//live
if($environment == 3){
  $servername = "localhost";
  $username = "accretion_dbuser";
  $password = "To0Z7HGWb]d_";
  $dbname = "accretion_accretiondb";
}
 ?>
