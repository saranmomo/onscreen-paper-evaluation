<html>
    <head>
        <title></title>
        <style>
            form{
                width:500px;
                height:350px;
                background-color:gray;
                border-radius:10px;
            }
            input{
                width:300px;
                height:50px;
            }
            ::placeholder{
				font-size: 20px;
				text-align:center;
			}
                
            
           
            </style>
</head>
<body>
<div id="header-div-id" style="font-size:30px;font-family:Verdana;float:left;margin:0px;padding:0s;height:80px;width:100%;background-color:#5f5f5f;color:white;">
			<p style="font-size:23px;margin-left:20px;display:inline-block;margin-top:9px;">ONLINE DIGITAL EVALUATION SYSTEM</p>
			<button  style="display:inline-block;margin-top:30px;padding:8px 16px;margin-right:15px;float:right;" onclick="logout()" >
			Logout
			</button>
				<button  style="display:inline-block;margin-top:30px;padding:8px 16px;margin-right:15px;float:right;" onclick="marks()" >
					Marks
					</button>
					<button  style="display:inline-block;margin-top:30px;padding:8px 16px;margin-right:15px;float:right;" onclick="Assign()" >
						Assign Papers
						</button>
						<button  style="display:inline-block;margin-top:30px;padding:8px 16px;margin-right:15px;float:right;" onclick="faculty()" >
							All Faculty 
							</button>
		</div>
		<br><br>
		<center>
			
		<u><h1 style="margin-top:80px;">Add Faculty Members</h1></u>
		<button onclick="add()" style="margin-top:40px;margin-left:430px;background-color:black;color:white;font-size:17px;">back</button>
		
			<form action="" method="post" style="margin-top:20px;">
            <input type="text" name="fid" placeholder="faculty ID" required style="margin-top:60px;" ><br><br>
            <input type="text" name="fname" placeholder="faculty Name" required><br><br>
            <input type="password" name="fpass" placeholder="faculty password" required><br><br>
            <input type="submit" name="sub" value="Add"  style="background-color:green;color:black;font-size:18px;" >
		</form>
		<?php
		include "connect.php";
		if(isset($_POST["sub"])){
			$id=$_POST["fid"];
			$name=$_POST["fname"];
			$pass=$_POST["fpass"];
			$res=$conn->query("select * from faculty where Id='".$id."'");
			if($res->num_rows>0){
				echo "<script>alert('id is already exits')</script>";
			}
			else{
				
				$res=$conn->query("insert into faculty values('$id','$name','$pass')");
				if($res===true){
					echo "<script>alert('add successfully')</script>";
				}
			}
		}
		?>
			

		
	</center>
		<script>
			function faculty(){
				window.location.href="faculty.php";
			}
			function logout(){
				window.location.href="login.php";
			}
			function marks(){
				window.location.href="marks.php";
			}
			function Assign(){
				window.location.href="assign.php";
			}
			function add(){
				window.location.href="faculty.php";
			}
		</script>
</body>
</html>