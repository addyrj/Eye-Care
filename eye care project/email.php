<?php
    ob_start();
?>
<html>
   
   <head>
       
      <title>Parijat Eye Care</title>
   </head>
   
   <body>
      
      <?php
	 if(!empty($_POST)){ 
		 $name 			= $_POST['name']; 
		 $email 		= $_POST['email'];
		 $phone 		= $_POST['phone']; 
		 $description 	= $_POST['message'];  
         $to = "jay.aladinn@gmail.com";
         $subject = "Patient Enquiry";		 
         $message = "<b> My physio </b>"; 
         $message .= "<table width='600' height='124' border='1' cellpadding='0' cellspacing='0' bgcolor='#FFFFCC'>
								<tr>
									<td>Name :</td><td>".$name."</td>
								</tr>
							
								<tr>
									<td>Email :</td><td>".$email."</td>
								</tr>
								
								<tr>
									<td>Mobile :</td><td>".$phone."</td>
								</tr> 
								
								<tr>
									<td>Message :</td><td>".$description."</td>
								</tr>	 
				 
							</table>";
         
      
		 $header = "From:".$email." \r\n";
		 $header .= "Cc:customercare@aladinntech.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 $header .= "Reply-To: ". strip_tags($email) . "\r\n";
         $retval = mail ($to,$subject,$message,$header);
         #echo '<pre>';print_r($retval);die('i am in');
          
         if( $retval == true ) {
           header("Location:thankyou.php"); 
         }else {
           $message =  'There was a problem sending the email.';
         }
	   }
	  
      ?>
      
   </body>
</html>