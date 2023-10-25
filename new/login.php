<?php

session_start();
$_SESSION['FactId']="";

?>

<!DOCTYPE html>
<html>
<head>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="CommonStyle.css" >
<link rel="stylesheet" type="text/css" href="login.css" >

<title>ODES Login</title>
</head>
<body>
 


<div id="login-page-div">

	
	
	<div id="form-div">
	
		<!--<div id="title-div" style="display: table-cell;" >
			<!--<div style="display: table-cell;" >
			<ul>
				<li>On-line Digital Evaluation System</li>
			</ul>
			<!--</div>
	
		</div>-->
		
		<input type="text" value="ON-LINE DIGITAL EVALUATION SYSTEM" id="title-box" readonly />
	
		<form id="login-form" method="post" action="" >
			<input type="text" id="id" name="id" placeholder="Faculty ID" required>
			<input type="password" id="pass" name="pass"  placeholder="Password" required/>
			<select name="login-as" id="login-as" required>
				<option value="none">Login as</option>
				<option value="admin"  >ADMIN</option>
				<option value="Evaluator" >Evaluator</option>
			</select>
			<button type="submit" value="submit" name="SubmitButton" class="header-button" style="border-radius:3px; padding: 13px 60px; margin-top: 40px;" >Login</button>
	  
		</form>
		
		
		
	</div>
</div>
<?php
include "connect.php";
if(isset($_POST["SubmitButton"])){
    $Id=$_POST["id"];
    $pass=$_POST["pass"];
      if($_POST["login-as"]=="Evaluator"){
        $res=$conn->query("select * from faculty where Id='".$Id."' && Password ='".$pass."' " );
        if($res->num_rows>0){
            if($row = $res->fetch_assoc()) {
				if($row["Password"]==$pass) {
					$_SESSION["FactId"]=$Id;
					$resultT = $conn->query("SELECT `Name` FROM `faculty` WHERE `Id`='{$_SESSION['FactId']}'");
					if ($resultT->num_rows > 0) {
						if($rowT = $resultT->fetch_assoc()){
							$_SESSION['FactName'] = $rowT['Name'];
							header("Location:evaluate.php");
                            
						}
                    }	
                }
            }

        }
        else{
            echo "<script>alert('id & password worng')</script>";
        }
      }
      elseif ($_POST["login-as"]=="admin") {
            if($Id==="a101" && $pass==="admin")
            {              
                header("Location:faculty.php");
            }
            else{
                echo "<script>alert('id & password worng')</script>";
            }
        }
    }	
    
            
 



?>

</body>
</html>

