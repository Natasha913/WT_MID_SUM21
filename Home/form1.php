<?php
    $name = "";
	$err_name="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession= "";
	
	$hasErro=false;
	
	$profs = array("Service","Business","Teaching");
	
	
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
	  if(empty($_POST["name"])) {
		  $hasError = true ;
		  $err_name="Name Required";
	  }
	  else if (strlen($_POST["name"]) <=2)
	  {
		  $hasError = true;
		  $err_name = "Name must be greater than 2 characters";
	  }
	else 
	{
		$name = $_POST["name"];
	}	
	if (!isset ($_POST["gender"]))
	{ 
	   $hasError = true ;
	   $err_gender = "Gender Required";
	}
	else 
	{
		$gender = $_POST["gender"];
	}
	if (!$hasError){
   echo $_POST["name"]."<br>";
   echo $_POST["password"]."<br>";
   echo $_POST["address"]."<br>";
   echo $_POST["gender"]."<br>";
   $arr = $_POST[" game"];
   global $arr;
   foreach($arr as $e){
       echo "$e<br>";
   }
  }
  }
  ?>

<html>
    <body>
	   <table>
	   <form action = "" method= "post">
	       <tr>
			      <td> Name</td>
			      <td> <input name = "name" value = "<?php echo $name ; ?> type ="text"> </td>
				  <td><span><?php echo $err_name ; ?></span></td>
		   </tr>
		   <tr>
			     <td> Password</td>
				 <td> <input name ="password" type ="password"> </td>
				  <td><span></span></td>
	       </tr>
			  <br>
			 
		    <tr>
			     <td> Address</td>
			     <td> <textarea name = "address" ><?php echo $address; ?> </textarea></td>
				  <td><span></span></td>
		  </tr>
		  <tr>
     		  <td >Profession</td>
			  <td >: 
			  <select name = "profession" >
			       <option selected disabled> Select </option>
				 <?php
				   foreach ($profs as $p){
					   if ($p == $profession )
					 
					   echo "<option selected>$p</option>";
					   else 
					   echo  "<option >$p</option>";
				   }
				   
				  ?>
				   
			      
			  </select> </td>
			  <td><span></span></td>
		  </tr>
	      <tr>
			      <td> Game </td>
				  <td><input name =" game []" type = "checkbox" value ="Hockey" >Hockey<br> <input type = "checkbox" value = "Football" > Football<br>
				  <input name =" game []" type = "checkbox" value ="Badminton" >Badminton<br>
				  <input name =" game []" type = "checkbox" value = "Cricket" >Cricket<br>
				  <input name =" game []" type = "checkbox" value = "Volleybal >Volleybal
				  </td>
				  <td><span></span></td>
		  </tr>
		  <tr>
      			  <td> Gender   </td> 
				 <td> < input type ="radio" value = "Male" <?php if ($gender == "Male") echo "checked"; ?> name ="gender">  Male <input  type ="radio" value ="Female"   <?php if ($gender == "Female") echo "checked"; ?> name = "gender"> Female <br>
				 </td>
				  <td><span><?php echo $err_gender ; ?></span></td>
		 </tr>
		 <tr align = "middle" >
			     <td colspan="2"> <button>Submit</button> </td>
		</tr>
		</form>
	   </table>
	</body>
</html>