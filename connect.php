<?php
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$mail = $_POST['mail'];
$password = $_POST['password']; 

//DataBase
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error); 
}else{
    $sql = "insert into registration(firstname,secondname,mail,password )
    values(?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sssi",$firstname,$secondname,$mail,$password);
    $stmt->execute();
    echo"registration succesfully";
    $stmt->close();
    $conn->close();
    
}

?>