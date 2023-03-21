<?php
require_once('include/connection.php');
?>
<?php
$query ="UPDATE user  SET first_name='Sadun' where id=3";

$result=mysqli_query($connction,$query);


if($result){
    echo mysqli_affected_rows($connction)."record update";
}else{
    echo "fail";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>




</body>
</html>