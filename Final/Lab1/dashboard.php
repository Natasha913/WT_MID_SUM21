<?php
      session_start();
	  if(!isset($_SESSION["loggeduser"])){
		  header("Location: index.php");
	  }
?>
<html>
    <body>
	    <h1 align = "center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		
			     <a  href="addBook.php" >Add Books  </a> 
                 <a  href="editBook.php"  >Edit Books </a> 
				 <a  href="removeBook.php" >Remove Books </a> 
				 <a  href="admin.php">Back </a> 
             
	</body>
</html>