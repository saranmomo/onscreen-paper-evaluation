<html>
    <head>
        <title></title>
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
		<br><br><br><br>
		<center>
			
		<u><h1 style="margin-top:80px;">All Faculty Members</h1></u>
		<button onclick="add()" style="margin-top:50px;margin-left:800px;background-color:black;color:white;font-size:15px;">+Add faculty</button>
		<table border=1 style="width:70%;hieght:200px;margin-top:30px;font-size:20px;">
			<tr >
			<th>Faculty Id</th>
			<th>Name</th>
			</tr>
			<?php
			include "connect.php";
			$res=$conn->query("select * from faculty");
			if($res->num_rows>0){
				while($row=$res->fetch_assoc())
				echo '<tr><td>' .$row["Id"]."</td><td>".$row["Name"]."</tr>";
			}
			?>

		</table>
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
				window.location.href="add.php";
			}
		</script>
</body>
</html>