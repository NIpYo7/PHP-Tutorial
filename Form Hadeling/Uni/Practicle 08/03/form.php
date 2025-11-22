<?php 
	
	//crate empty variable
	$emailerr="";
	$ageerr="";
	if(isset($_POST['button'])){
		//variable
		$email=htmlspecialchars($_POST['email']);
		$age=$_POST['age'];
		
		
		//email validation
		if(empty($email)){
			$emailerr= "Email is requred";
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailerr="Invalid Email Foramat";
		}
		else{
			echo "Valid Email Adress";
		}
		
		//age validation
		if(empty($age)){
			$ageerr="Age is requred";
		}
		else if(!preg_match("/^[0-9]+$/",$age)){
			$ageerr="Must contain Numbers Only";
		}
		else{
			echo "Age is vallid";
		}
		
		
		
		
		
	}
	else {
		echo "Form Not Submitted";
	}
	
	
	
	
	
	
	
	
	
	
	?>