<?php
    $name = "";
	$err_name="";
	$username = "";
	$err_username="";
	$password="";
	$err_password="";
	$confirm_password = "";
	$err_confirm_password = "";
	$birth_date="";
	$err_birth_date= "";
	$gender="";
	$err_gender="";
	$bio = "";
	$err_bio = "";
	$email="";
	$err_email="";
	$phone= "";
	$err_phone="";
	$address="";
	$err_address="";
	
	$hasErro=false;
    
	$day = array ("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
    $month = array ("jan","feb","mar","apr","may","jun","july","aug","sep","oct","nov","dec");
	
#	function Where_did_you_hear_about_usExist ($h){
#		foreach ($about_us as $Where_did_you_hear_about_us  ){
#		       if ($h == $Where_did_you_hear_about_us) return true;
#	}
#	return false;
#}
	
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

	if(empty($_POST["username"])) {
		$hasError = true ;
		$err_username="Username Required";
	}
	else if (strlen($_POST["username"]) <=6)
	{
		$hasError = true;
		$err_username = "Username must be greater than 6 characters";
	}
  else 
  {
	  $name = $_POST["username"];
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
   echo $_POST["username"]."<br>";
   echo $_POST["password"]."<br>";
   echo $_POST["address"]."<br>";
   echo $_POST["gender"]."<br>";
   $arr = $_POST["birth_date"];
   global $arr;
   foreach($arr as $e){
       echo "$e<br>";
   }
  }
  }
  ?>
<html>
    <body>
	    <form action = "" method= "post">
        <fieldset>
	       <table >
		   
		      <tr align = "middle" >
			     <td colspan="2" ><h2><b>Club Member Registration</b></h2></td>
	          </tr>
			 
			  <br>
			 
		      <tr align = "right">
			     <td> Name</td>
			     <td> <input name = "name" value = "<?php echo $name ; ?>"" type ="text"> </td>
				 <td><span><?php echo $err_name ; ?></span></td>
		     </tr>
             <br>
             <tr align = "right">
			     <td> Username </td>
			     <td> <input name = "username" value = "<?php echo $name ; ?>"" type ="text"> </td>
				 <td><span><?php echo $err_username ; ?></span></td>
			 </tr>
			 <tr align = "right">
			     <td> Password</td>
				 <td> <input name = "password"  value = "<?php echo $name; ?>"" type ="password"> </td>
				 <td><span><?php echo $err_password ; ?></span></td>
	          </tr>
			  <br>
              <tr align = "right">
			     <td>Confirm Password</td>
			     <td> <input name = "confirm  password" value = "<?php echo $name; ?> "  type ="text"> </td>
				 <td><span><?php echo $err_confirm_password ; ?></span></td>
			 </tr>
             <br>
             <tr align = "right">
			     <td> Email</td>
			     <td> <input name = "email" value = "<?php echo $name; ?> " type ="text"> </td>
				 <td><span><?php echo $err_email ; ?></span></td>
			 </tr>
             <br>
             <tr align = "right">
			     <td>Phone</td>
			     <td align = "left"><p> <input  name = "phone"  type ="text"  id="pin" name="pin" maxlength="2" size="3" placeholder = "Code"> 
				  -   <input type ="text"  id="pin" name="pin" maxlength="2" size="10"placeholder = "Number"> </p></td>
		        
			 </tr>
             <br>
			 
		      <tr align = "right">
			     <td> Address</td>
			     <td> <input name = "address"  type ="text" placeholder = "Street Address"></td>
				
			   </tr>
             <tr align = "right">
			     <td ></td>
			     <td align = "left"><p> <input type ="text"  id="pin" name="pin" maxlength="2" size="6.5"placeholder = "City">  -   <input type ="text"  id="pin" name="pin" maxlength="2" size="6.5"placeholder = "State"> </p>
			    </td>
            </tr>
            <tr>
                <td></td>
                <td><input type ="text"placeholder = "Postal/Zip Code"></td>
            </tr>
            <tr align = "right">
			     <td> Birth Date</td> 
			     <td>
				    <select name = "day">
			             <option selected disabled > Day </option>
						 <?php
				   foreach ($day as $d){
					   if ($d == $day )
					 
					   echo "<option selected>$d</option>";
					   else 
					   echo  "<option >$d</option>";
				   }
				   
				  ?>
					</select>
                    <select>
			             <option selected disabled > Month </option>
						 <?php
				   foreach ($month as $m){
					   if ($m == $month )
					 
					   echo "<option selected>$m</option>";
					   else 
					   echo  "<option >$m</option>";
				   }
				   
				  ?>
					</select>
                    <select>
			             <option selected disabled >Year </option>
						 <?php
				   foreach ($year as $y){
					   if ($y == $year )
					 
					   echo "<option selected>$y</option>";
					   else 
					   echo  "<option >$y</option>";
				   }
				   
				  ?>
					</select>
				  </td>
				  <td><span><?php echo $err_birth_date ; ?></span></td>
			</tr>
		    <tr align = "right ">
      			     <td> Gende   </td> 
				     <td align = "left"><input type ="radio" value = "Male" <?php if ($gender == "Male") echo "checked"; ?>  name ="gender">  Male <input type ="radio" value ="Female"   <?php if ($gender == "Female") echo "checked"; ?> name = "gender"> Female <br>
				   </td>
				   <td><span><?php echo $err_gender ; ?></span></td>
		        </tr>
				<tr>
			      <td> Where did you hear <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  about us?  </td>
				  <td><input type = "checkbox">A Friend or Colleague<br><input type = "checkbox">Google<br> <input type = "checkbox">Blog Post<br>
				  <input type = "checkbox">New Article<br>
				  </td>
				</tr>
                <tr align = "right">
                <td>Bio:</td>
                <td><textarea name = "bio"><?php echo $bio ?></textarea><br><span><?php echo $err_bio ; ?></span></td>

                </tr>
                <br>
			     
			<tr align = "middle" >
			     <td colspan="2"> 
				 <input type = "submit" value = "register"><br></td>
			</tr>
			
			</table>
		</form>	
        </fieldset>
	</body>
</html>