<!-- tk 1 vrbl fr empty str and fr 1 err cntrl -->
<?php
     $bname = ""; 
	 $err_bname = ""; 
	 $bid = "";
	 $err_bid = "";
	 $categories = "";
	 $err_categories = "";
	 $quantity = "";
	 $err_quantity = "";
	 $price = "";
	 $err_price = "";
	 
	 $hasError = false;
    $cat = array("Horror","Novel","Action and Adventure","Classics","Comic Book",
	"Detective","Fantacy","Romance","Science Fiction","Short Stories","Suspense"); //prsv


	 if ($_SERVER["REQUEST_METHOD"] == "POST" ){

		if(empty($_POST["bname"])){
			$hasError = true;
			$err_bname="Name Required";
		} 
		else 
		{
			$bname = $_POST["bname"]; //!-- if no er
		}

		if(empty($_POST["bid"])){
			$hasError = true;
			$err_bid="ID required";
		} 
		else if(!is_numeric($_POST["bid"]))
		{
			$err_bid="Numeric value required";
			$hasError = true;
		}
		else
		{
			$bid = $_POST["bid"];
		}


		


		if (!isset($_POST["categories"])){
			$hasError = true;
			$err_categories="Categories Required";
		}
		else
		{
			$categories = $_POST["categories"];
		}

		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity required";
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

        if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Price required";
		} 
		else if(!is_numeric($_POST["price"]))
		{
			$err_price="Price required";
			$hasError = true;
		}
		else 
		{
			$price = $_POST["price"];
		}

		
		
		

		if(!$hasError){ //otpt 
		echo "Complete"."<br>";
        echo $_POST["bname"]."<br>";
		echo $_POST["bid"]."<br>";
		echo $_POST["categories"]."<br>";
		echo $_POST["quantity"]."<br>";
		echo $_POST["price"]."<br>";

		}
	 }
 
?>
<html>
      <head>
	  <title>Remove Book</title>
	    
	  </head>
	  
	     <body>
		 <span><h1 align="center">Remove Book</h1></span>
		  
		    <form action="" method="post"> <!-- act for which page rcd and wch mthd fr rst--> 
			
			   <table align="center"  border ="2" >
			           <tr>
					        <td><span><b>Book Name:</b></span></td>
							<td><input type="text" name="bname" value = "<?php echo $bname;?>"placeholder="Enter book name">
							</td> <!-- name = "..." indx idntfr -->
							<td><span><?php echo $err_bname;?></span></td> 
					    </tr>
						<tr>
					        <td><span><b>Book ID:</b></span></td>
							<td><input type="text" name="bid" value = "<?php echo $bid;?>"  placeholder="Enter Id">
							</td> 
							<td><span><?php echo $err_bid;?></span></td> 
					    </tr>
					   
					   <tr>
					       <td><span><b>Categories:</b></span></td>
						   <td>
						 <select name="categories">
							           <option  selected disabled >--Choose One--</option>

									     <?php 
										 foreach($cat as $c){ //dynmc 
											 if($c ==  $categories)
											 echo"<option selected>$c</option>";
											 else 
											 echo"<option>$c</option>"; //shw slct
										    }
											?>
							             </select>
						</td>
						<td><span><?php echo $err_categories;?></span></td> 
						      
						</tr>
				
				     <tr>
					           <td><span><b>Add Quantity:<b></span></td>
							   <td><input type="text" name="quantity" value = "<?php echo $quantity;?>" placeholder="Add Quantity"></td>
							   <td><span><?php echo $err_quantity;?></span></td> 
							   
					</tr>	
					<tr>
					           <td><span><b>Add Price:</b></span></td>
							   <td><input type="text" name="price" value = "<?php echo $price;?>" placeholder="Add price"></td>
							   <td><span><?php echo $err_price;?></span></td>  
					</tr>	
				
					   <br>
				        
					    <tr  align = "middle">
				             <td colspan = "3"><input type="submit" name="submit "value="Remove Book"></td>
				        </tr>  
						<tr align = "middle">
                        <td  colspan = "3" ><span><a   href="book_collection.php">Back</a> </span></td>
                        </tr>  
							
					       
				</table>
				
            </form>
		 
			 
		 
		 </body>
		 
</html>