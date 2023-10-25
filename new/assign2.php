<?php
include "connect.php";
if(isset($_POST["sub"])){
    $fname=$_POST["fname"];
    $paper=$_POST["paper"];
    $res=$conn->query("select * from sub where paper_name='".$paper."'");
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            $code=$row["course_code"];
            $res1=$conn->query("insert into assign values('$fname','$code','$paper')");
            if($res1===true){
                echo "<script>alert('assign the paper successfully')</script>";
                echo "<script>window.location.href='assign.php'</script>";

            }
        }
    }
}
?>