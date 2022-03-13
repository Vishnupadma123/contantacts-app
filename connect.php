<?php
  $name=$_post['name'];
  $phno=$_post['number1'];
  $email=$_post['email']
//database connection
$conn=new mysqli('localhost','root','','test1');
if($conn->connect-error)
{
die('connection-failed : '.$conn->connect-error);
}
else
{
$stmt=$conn->prepare("insert into contact-info(name,phnumber,email)values(?,?,?)");
$stmt->bind-param("sis",$name,$phnumber,$email);
$stmt->execute();
echo "saved successfully...";
$conn->close();
}
  
?>