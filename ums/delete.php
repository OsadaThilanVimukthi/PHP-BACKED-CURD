<?php
require_once('include/connection.php');
?>
<?php
$query="DELETE FROM user  WHERE id=3 LIMIT 1 ";
$result=mysqli_query($connction,$query);
if($result){
    echo mysqli_affected_rows($connction)."record delete";
}else{
    echo error;
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

<php mysqli_close($connction)?>



