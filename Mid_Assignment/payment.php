<!-- tk 1 vrbl fr empty str and fr 1 err cntrl -->
<?php
     $name = ""; 
	 $err_name = ""; 
     $address = ""; 
	 $err_address = ""; 
     $quantity = "";
	 $err_quantity = "";
	 $payment= "";
	 $err_payment = "";
	 $num ="";
	 $err_num ="";
	 
	 $hasError = false;

     $pay = array("Bkash","Nogod","Debit Card","Credit Card"); //prsv


	 if ($_SERVER["REQUEST_METHOD"] == "POST" ){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		} 
		else 
		{
			$name = $_POST["name"]; //!-- if no er
		}

		


		if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		} 
		else 
		{
			$address = $_POST["address"];
		}


		if (!isset($_POST["payment"])){
			$hasError = true;
			$err_payment="Payment Required";
		}
		else
		{
			$payment = $_POST["payment"];
		}

		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity Required";
		} 
		else if(!is_numeric($_POST["quantity"]))
		{
			$err_quantity="Numeric value required";
			$hasError = true;
		}
		else
		{
			$quantity = $_POST["quantity"];
		}


		if(empty($_POST["num"])){
			$hasError = true;
			$err_num="Number Required";
		} 
		else if(!is_numeric($_POST["num"]))
		{
			$err_num="Number Required";
			$hasError = true;
		}
		else 
		{
			$num = $_POST["num"];
		}


		if(!$hasError){ //otpt 
        echo "Successfully Completed"."<br>";
        echo $_POST["name"]."<br>";
		echo $_POST["address"]."<br>";
		echo $_POST["quantity"]."<br>";
		echo $_POST["payment"]."<br>";
		echo $_POST["num"]."<br>";
		
		}
	 }
 
?>
<html>
      <head>
	  <title>Payment</title>
	    
	  </head>
	  
	     <body>
		 <span><h1 align="center">Payment</h1></span>
		  
		    <form action="" method="post"> <!-- act for which page rcd and wch mthd fr rst--> 
			
			   <table align="center"  border ="2" >
			           <tr>
					        <td><span><b>Name:</b></span></td>
							<td><input type="text" name="name" value = "<?php echo $name;?>"placeholder="Enter your name">
							</td> <!-- name = "..." indx idntfr -->
							<td><span><?php echo $err_name;?></span></td> 
					    </tr>
						<tr>
					        <td><span><b>Address:</b></span></td>
							<td><input type="text" name="address" value = "<?php echo $address;?>"  placeholder="Enter address">
							</td> 
							<td><span><?php echo $err_address;?></span></td> 
					    </tr>
					   
					   <tr>
					       <td><span><b>Payment Method:</b></span></td>
						   <td>
						 <select name="payment">
							           <option  selected disabled >--Choose One--</option>

									     <?php 
										 foreach($pay as $p){ //dynmc 
											 if($p ==  $payment)
											 echo"<option selected>$p</option>";
											 else 
											 echo"<option>$p</option>"; //shw slct
										    }
											?>
							             </select>
						</td>
						<td><span><?php echo $err_payment;?></span></td> 
						      
						</tr>
				
				     <tr>
					           <td><span><b>Quantity:<b></span></td>
							   <td><input type="text" name="quantity" value = "<?php echo $quantity;?>"  placeholder="Add Quantity"></td>
							   <td><span><?php echo $err_quantity;?></span></td> 
							   
					</tr>	
					<tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" name="num" value = "<?php echo $num;?>" placeholder="Add num"></td>
							   <td><span><?php echo $err_num;?></span></td>  
					</tr>	
					   <br>
				        
					    <tr  align = "middle">
				             <td colspan = "2"><input type="submit" name="submit "value="Order Now"></td>
				        </tr>  
						<tr align = "middle">
                       <!-- <td  colspan = "2" ><span><a   href="book_collection.php">Back</a> </span></td> -->
                        </tr>  
							
					       
				</table>
				
            </form>
		 
			 
		 
		 </body>
		 
</html>