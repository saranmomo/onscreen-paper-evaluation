<html>
    <head>
        <title></title>
        <style>
            form{
                width:400px;
                height:280px;
                background-color:gray;
                border-radius:10px;
            }
            input{
                width:200px;
                height:40px;
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
            
			
		<u><h1 style="margin-top:80px;">Assign</h1></u>
    <div class="form-popup" id="myform">
<form action="assign2.php" method="post">
    <br><br><br>
<select name="fname" style=" width:200px;height:40px;">
	<option style="text-align:center;">.....choose faculty.....</option>
                <?php
                include "connect.php";
                $res=$conn->query("select * from faculty");
                if($res->num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo "<option value='".$row["Name"]."'>".$row["Name"]."</option>";
                    }
                }
                ?>
</select><br><br>
<select name="paper" style=" width:200px;height:40px;">
	<option style="text-align:center;">.....choose paper.....</option>
                <?php
                include "connect.php";
                $res=$conn->query("select * from students");
				if($res->num_rows>0){
				while($row=$res->fetch_assoc()){
				$sub=$row["subject"];
				$res1=$conn->query("select * from assign where paper_name='".$sub."'  ");
				if($res1->num_rows==0){
				{
					echo "<option value='".$sub."'>".$sub."</option>";
				}
			}
		}}
                ?>
</select><br><br>
<input type="submit" name="sub" value="assign">

</form>
</div>

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