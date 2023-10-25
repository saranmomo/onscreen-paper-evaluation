<html>
    <head>
        <title></title>
		<style>
			   .con{
                width:330px;
                height:170px;
                background-color:gray;
                border-radius:10px;
            }
			table{
				width:300px;
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
		<br><br><br><br>
		<center>
			
		<u><h1 style="margin-top:80px;">Assign the paper</h1></u>
		
		<table border=1 >
			<tr>
				<th>Name of the paper</th>
				<th></th>
		</tr>
		<?php
		include "connect.php";
		$res=$conn->query("select * from students");
		if($res->num_rows>0){
			while($row=$res->fetch_assoc()){
				$sub=$row["subject"];
				$res1=$conn->query("select * from assign where paper_name='".$sub."'  ");
				if($res1->num_rows==0){	      
						echo "<tr><td>".$sub."</td>";?>
						<td ><a href="assign1.php" >assign</a></td>
						<?php
							
							



						}}
				
					echo "<tr><td>No papers</td><td>---</td></tr> ";
					echo "<script>alert('all papers already assigned,so no pending paper')</script>";
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
				window.location.href="add.php";
			}
		</script>
</body>
</html>