<?php require_once('include/connection.php');?>

<?php

$first_name="Dileep";
$last_name="sadun";
$email="12334@gmail.com";
$password="hellopassword";
$is_deleted=0;

$hashed_password=sha1($password);
//echo "hashed password:{$hashed_password}";
$query ="INSERT INTO user(first_name,last_name,email,password,is_deleted) VALUES('{$first_name}','{$last_name}','{$email}','{$hashed_password}',{$is_deleted})";

$result=mysqli_query($connction,$query);
if($result){
    echo "added";
}else{
    echo "faild";
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Insert</title>
</head>
<body>




</body>
</html>
<?php mysqli_close($connction);?>