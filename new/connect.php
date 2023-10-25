<?php 
$conn=new mysqli("localhost","root","","evalu");
if($conn->connect_error){
    echo "error".$conn->connrct_error;
}
?>