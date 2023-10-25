
    <?php
session_start();
include_once 'connect.php';
$FactId = $_SESSION['FactId'];
//$FactId = 'f02';
//echo $FactId;
?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<!--<script type="text/javascript" src="jquery-1.4.1.min.js"></script>-->
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		
		<link type="text/css"  rel="stylesheet" href="SelectionPageStyle.css" >
		<style>
             .tab{
                
                
                background-color: azure;
                margin-top:-700px;
                margin-left: 930px;
            }
            table{
                width:400px;
                text-align:center;
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
     <?php
     include "connect.php";
     if(isset($_POST["sub"])){
        $paper= $_POST["subject"];
        $res=$conn->query("select * from students where subject='".$paper."' ");
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                $filename=$row["path"];
                ?>
                <iframe src="<?php echo $filename;?>" width="900px" height="700px"></iframe>
                <?php 

                
            }
        }

     }
           ?>
           
        
            
           <div class="tab">
                    <table border=1px>
                       
                    <tr><center><th>Awarded Marks Summary </th></center></tr>
    </table><table border=1px style="height:100px;overflow-y:scroll;"><tr>
                        <th style="width:80px;">Qn</th>
                        <th style="width:150px;">marks</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td id="qn1"><center><button onclick="open1()" style="boder:none;">-</button></center></td>
                        <td><center><p id="t1">0</p></center></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td id="qn2"><center><button onclick="open2()" style="boder:none;">-</button></center></td>
                        <td><center><p id="t2">0</p></center></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td id="qn3"><center><button onclick="open3()" style="boder:none;">-</button></center></td>
                        <td><center><p id="t3">0</p></center></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td id="qn4"><center><button onclick="open4()" style="boder:none;">-</button></center></td>
                        <td><center><p id="t4">0</p></center></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td id="qn5"><center><button onclick="open5()" style="boder:none;">-</button></center></td>
                        <td><center><p id="t5">0</p></center></td>
                    </tr>
                
               
    </table>
    <div class="constent">
            <table border=1px;>
            <tr>
                <td style="width:240px;">Total Awarded Marks:</td>
                <td><p id="tol">0</p></td>
    </tr>
    </table><br>

    <b style="width:200px;font-size:18px;margin-left:180px;">eMarking</b><br><hr>
<table border=1px>
    <tr>
        <th>Question No.</th>
        <th>marks Awarded</th>
    </tr>
    <tr>
        <td>
            <input id="qn" value="1" style="width:35px;height:60px;font-size:30px;"> </td>
  
 
        <td> 
            <input id="mm" type="number" pattern="[1-9]{2}" tittle="only give the below 10 marks" style="width:55px;height:65px;font-size:25px;margin-right:70px;margin-top:2px;">
            <p style="font-size:50px;margin-top:-60px;">\</p>
            <p id="am" style="width:35px;height:60px;font-size:30px;border-style:groove;margin-top:-112px;margin-left:160px;border-radius:5px;"></p>
        </td>
    </tr>
    </table>


                       
            <label for="subject">Title of the paper:</label>
            <input type="text" name="subject"  style="width: 120px;margin-top: -20px;margin-left: 120px;" ><br><br>
            <label for="reg">Register Number:</label>
            <input type="text" name="reg"  style="width: 120px;margin-top: -20px;margin-left: 6px;" > <br><br>
            <input type="submit" name="sub" value="submit ">
        </form><br>
        <p>-------------------------------------------------</p><br>
        <form action="report1.php" method="post">
            <input name="search" type="text"  placeholder="Register No" required style="margin-left: 27px ;width: 200px;height: 25px;"><br><br>
            <input  type="submit" name="ser" value="Print Report">
        </form>
 
           </div>
    </div>           
             <script>
            function logout(){
                window.location.href="login.php";
            }
            function open(value){
                window.location.href="login.php";
            
            }
            function  open1(){
                document.getElementById("qn").innerHTML="1";
                document.getElementById("am").innerHTML="10";
                


            }
            </script>
          
       
           
    
    </body>
    </html>
   


