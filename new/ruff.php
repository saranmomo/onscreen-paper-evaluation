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
			
		<u><h1 style="margin-top:80px;">Assign the paper</h1></u></center>
		<table border=1>
			<tr>
				<th>faculty</th>
				<th>paper</th>
		</tr>
		<?php
		include "connect.php";
		$res=$conn->query("select * from faculty");
		if($res->num_rows>0){
			while($row=$res->fetch_assoc()){
				$res1=$conn->query("select regno,subject from students ");
				if($res1->num_rows>0){
					while($row1=$res1->fetch_assoc()){
						$regno1=$row1["regno"];
						$sub=$row1["subject"];
						$res2=$conn->query("select regno,paper from assign where regno='".$regno1."' && paper='".$sub."' ");
						if($res2->num_rows>0){
							while($row2=$res2->felch_assoc()){
								echo "<tr><td>".$row["Name"]."</td>";
								echo "<td><select name=paper><option value='".$row2['paper']."'>".$row2['paper']."</option></select></tr>";
							}
						}
					    else{
							echo "<tr><td>".$row["Name"]."</td>";
							echo "<td><select name=paper><option value='".$row1['subject']."'>".$row1['subject']."</option></select></td></tr>";
							
							



						}

					}


				}
			}
		

		}
		?>
		
		
       
	
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









</tr>
                    <td><input type="number" name="q1" style="width: 50%;"></td>
                    <td><input type="number" name="t1" style="width: 50%;"></td>
                    <td><input type="number" name="m1" style="width: 50%;"></td>

                </tr><tr>
                    <td><input type="number" name="q2" style="width: 50%;"></td>
                    <td><input type="number" name="t2" style="width: 50%;"></td>
                    <td><input type="number" name="m2" style="width: 50%;"></td>
                    
                </tr>
                <tr>
                    <td><input type="number" name="q3" style="width: 50%;"></td>
                    <td><input type="number" name="t3" style="width: 50%;"></td>
                    <td><input type="number" name="m3" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q4" style="width: 50%;"></td>
                    <td><input type="number" name="t4" style="width: 50%;"></td>
                    <td><input type="number" name="m4" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q5" style="width: 50%;"></td>
                    <td><input type="number" name="t5" style="width: 50%;"></td>
                    <td><input type="number" name="m5" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q6" style="width: 50%;"></td>
                    <td><input type="number" name="t6" style="width: 50%;"></td>
                    <td><input type="number" na9me="m6" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q7" style="width: 50%;"></td>
                    <td><input type="number" name="t7" style="width: 50%;"></td>
                    <td><input type="number" name="m7" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q8" style="width: 50%;"></td>
                    <td><input type="number" name="t8" style="width: 50%;"></td>
                    <td><input type="number" name="m8" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q9" style="width: 50%;"></td>
                    <td><input type="number" name="t9" style="width: 50%;"></td>
                    <td><input type="number" name="m9" style="width: 50%;"></td>
                </tr>
                <tr>
                    <td><input type="number" name="q10" style="width: 50%;"></td>
                    <td><input type="number" name="t10" style="width: 50%;"></td>
                    <td><input type="number" name="m10" style="width: 50%;"></td>
                </tr>