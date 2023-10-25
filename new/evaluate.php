<?php
session_start();
include_once 'connect.php';
$FactId = $_SESSION['FactId'];
//$FactId = 'f02';
//echo $FactId;
?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script></script>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<!--<script type="text/javascript" src="jquery-1.4.1.min.js"></script>-->
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		
		<link type="text/css"  rel="stylesheet" href="SelectionPageStyle.css" >
		<style>
			.uncorrected{
				display: block;
	/* justify-content: space-around; */
	margin-top: 50px;
	/* border: 5px solid black; */
	background-color: #ccc;
	margin-left: 50px;
	float: left;
	padding: 0;
	height: 320px;
	margin-bottom: 10px;
	width: 450px;
	border-radius: 7px;
	overflow: auto;
	margin-left:400px;
}
			
		</style>
	</head>
	<body>
	
		
	
	
		<div id="header-div-id" style="font-size:30px;font-family:Verdana;float:left;margin:0px;padding:0s;width:100%;background-color:#5f5f5f;color:white;">
			<p style="font-size:23px;margin-left:20px;display:inline-block;margin-top:9px;">ONLINE DIGITAL EVALUATION SYSTEM</p>
			<button class="round-edge-button header-button" id="logout-button" style="display:inline-block;margin-top:10px;padding:8px 16px;margin-right:15px;float:right;" onclick="logout()">
			Logout
			</button>
			<p style="font-size:18px;float:right;margin-bottom:0px;margin-right:120px;display:inline-block;margin-top:15px;" >Hello <?php echo $_SESSION['FactName'];?>!</p>

		</div>
        
            	
				
					<div id="uncorrected" class="uncorrected"   >
					<center><h3>choose subject to begin evaluation</h3>
					<hr>
                        <table border=1 style="width:300px;">
							<tr>
								<th>Paper code</th>
								<th>Name of the paper</th>
								
							</tr>
                         <?php
                         include "connect.php";
                         $res=$conn->query("select * from assign where faculty='".$_SESSION['FactName']."' ");
                         if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                              echo "<tr><td>".$row["sub_code"]."</td><td>" .$row["paper_name"]. "</td></tr>";
						 	 
							  }
							}
							
						?>
						</table> 
						<form action="open.php" method="post">
							<select name="subject">
								<option>.....choose the paper.....</option>
						<?php
                         include "connect.php";
                         $res=$conn->query("select * from assign where faculty='".$_SESSION['FactName']."' ");
                         if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                              echo "<option value='".$row["paper_name"]."'>" .$row["paper_name"]. "</option>";
						 	 
							  }
							}
							
						?>	
						</select>
						
						<input type="submit" name="sub" value="open" style="margin-top:140px;">
						</form>
</center>                   </div>
  
					
			
            <script>
            function logout(){
                window.location.href="login.php";
            }
            function open(value){
                window.location.href="login.php";
            
            }
            </script>