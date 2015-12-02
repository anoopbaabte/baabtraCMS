<?php

$conn = mysqli_connect('localhost','root','','android');
if($conn){

}
if(isset($_GET['email'])&&isset($_GET['password']))
{

 $email = $_GET['email'];
 $password = $_GET['password'];
// echo $email.",".$password;
  $query = "select * from tbl_login where vchr_email='$email' and vchr_password='$password'";

 $result = mysqli_query($conn,$query);
 
 while($rw[]=mysqli_fetch_assoc($result))
 {
 }
echo json_encode($rw);
}

?>