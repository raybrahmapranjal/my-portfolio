<?php 
session_start();
if (isset($_POST['name'])) {
	$to = "pranjal12roy@gmail.com";
		
	$subject = "hiring request for web and app related";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$message2 = "<b> Hello Pranjal, I am ".$name."<br>".$message.".My contact details is as follows : ".$email."</b>";

	

	$header = "From:".$email.".com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";

	$retval = mail ($to,$subject,$message2,$header);

	if( $retval == true ) {
	
                    
                    $to = $_POST['email']; 
                    $from = "pranjal12roy@gmail.com";
                    $subject = "website and android app related";  
                    $message = "<h2>mail Recieved!</h2>";  
                    $message .= "<h3>Hello! <b>$username</b>, <br>Thanks for your valuable time and sending me a mail. Soon our team will contact you.</h3>";  
                    
                    $header = "From:".$from." \r\n";  
                    $header .= "MIME-Version: 1.0 \r\n";  
                    $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
                    
                    $result = mail ($to,$subject,$message,$header);  
                    
                    if( $result == true ){  
                     $_SESSION['messageSuccess']= "your mail is sent";
                        // echo '<script>window.location.assign("contact.php");</script>';
                    }else{  
                          $_SESSION['messageErr']= "Sorry, your mail is not send.";
                            // echo '<script>window.location.assign("contact.php");</script>';
                        } 
                    
           
	}
}


	
?>