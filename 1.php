<?php
$EID=$_post['EID'];
// $PAS=$_post['PAS'];

$conn = mysqli_connect('localhost','root','','my asose users');
// if($conn->connect_error){
//     die('Connection Failed  :  '.$conn->connect_error);
// }else{
//     $stmt = $conn->prepare("insert into registration(EID , PAS) values(?,?)");
//     $stmt->blind_param("ss",$EID,$PAS);
//     $stmt->execute();
//     echo "registration Successfully...";
//     $stmt->close();
//     $conn->close();
// }
?>