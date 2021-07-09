<?php
    session_start();
     $name = ""; 
	 $err_name = ""; 
	 $id = "";
	 $err_id = "";
	 
	  $hasError = false;
	  $user = array("Natasha"=>"1234","Nata"=>"123","Mahi"=>"222");
	  
	  if ($_SERVER["REQUEST_METHOD"] == "POST" ){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		} 
		else 
		{
			$name = $_POST["name"]; 
		}

		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="ID required";
		} 
		else if(!is_numeric($_POST["id"]))
		{
			$err_id="Numeric value required";
			$hasError = true;
		}
		else
		{
			$id = $_POST["id"];
			
		}
		
		if(!$hasError){ 
		foreach ($user as $u=>$p){
			if($name == $u && $id == $p){
				$_SESSION["loggeduser"] = $name;
			header ("Location: dashboard.php");
			}
		}
		
		echo "Invalid user";
		}
	 }
?>
	  
 <html>
      <head>
	  </head>
	     <body>
		    <form action="" method="post"> <!-- act for which page rcd and wch mthd fr rst--> 
			
			   <table  >
			           <tr>
					        <td><span><b> Name:</b></span></td>
							<td><input type="text" name="name" value = "<?php echo $name;?>">
							</td> 
							<td><span><?php echo $err_name;?></span></td> 
					    </tr>
						<tr>
					        <td><span><b> ID:</b></span></td>
							<td><input type="text" name="id" value = "<?php echo $id;?>">
							</td> 
							<td><span><?php echo $err_id;?></span></td> 
					    </tr>
					    
					    <tr >
				             <td ><input type="submit" name="submit "value="submit"></td>
				        </tr>  
						<tr >
                        <td  colspan = "3" ><span><a   href="book_collection.php">Back</a> </span></td>
                      </tr>  
				</table>
            </form>
		 </body>
</html>