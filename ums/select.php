<?php require_once('include/connection.php');
?>


<?php
$query ="SELECT id,first_name,last_name,email FROM user";

$resulatSet=mysqli_query($connction,$query);

if($resulatSet){
//check how many record
   echo  mysqli_num_rows($resulatSet)."record found<hr>";
    //echo "success";

/*$record=mysqli_fetch_assoc($resulatSet);
echo "<pre>";
print_r($record);
echo "</pre>";*/

$table='<table>';
$table.='<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

while($record=mysqli_fetch_assoc($resulatSet)){
    $table.='<tr>';
    $table.='<td>'.$record['id'].'</td>';
    $table.= '<td>'.$record['first_name'].'</td>';
    $table.='<td>'.$record['last_name'].'<td>';
    $table.='<td>'.$record['email'].'</td>';
$table.='</tr>';
}

$table.='</table>';

}else{
    echo "bad";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>select</title>
<style>
td,th{border:1px solid black;}
    </style>
</head>
<body>

<?php

echo $table;?>


</body>
</html>
<?php mtsqli_close($connction);?>