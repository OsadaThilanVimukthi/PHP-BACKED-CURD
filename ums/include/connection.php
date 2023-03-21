<?php
//$connection=mqsqli_connect(deserver,dbuser,dbpass,dbname);
$connction=mysqli_connect('localhost','root','','db_test');


//error check
if(mysqli_connect_errno()){
die('database Failed'.mysqli_connect_error());
}else{
   // echo "connection ok";
}v
?>