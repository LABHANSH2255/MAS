<!DOCTYPE html>
<html lang="en">
<head>
    <title>insert page page</title>
</head>
<body>
    <center>
    <?php
// $email=filter_input(INPUT_POST, 'email');
// $password=filter_input(INPUT_POST, 'password');

$db="user701";
$pas="";
$username="root";
$server="127.0.0.1";

$conn = mysqli_connect($server,$username,$pas,$db);
if($conn){
    echo('success');
}
else{
    die("ERROR: Could not connect. "
    . mysqli_connect_error());
}
$email=$_REQUEST['email'];
$password=$_REQUEST['pas'];
$sql = "INSERT INTO user9213  values ('$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("$password\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}





// if(mysqli_query($conn,$sql)){
//     echo "new record is inserted sucessfully";
// }
// else{
//     echo"error:".$sql."<br>".$conn->error;
// }
mysqli_close($conn);
?>
    </center>
    
</body>
</html>