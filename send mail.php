 <?php 
if(isset($_POST['submit'])){
         $full_name=$_POST['form_name'];        
         $email_address=$_POST['form_email'];
         $your_message=$_POST['form_message'];          
		$your_mob=$_POST['form_mob'];  
        $to='contact@ocelotconsulting.in';
  
         $subject = 'Customer Contact Details';
       $message = '<html>
            <head><title>Customer Details</title></head>
            <body>
            <p>Dear sir,</p>
              <table>
              <tr> <td>  Name </td>  <td>:</td> <td>'.$full_name.'</td>    </tr>
              <tr> <td>  Email ID</td>  <td>:</td> <td>'.$email_address.'</td>    </tr>
			  <tr> <td>  Message </td>  <td>:</td> <td>'.$your_mob.'</td>    </tr> 
              <tr> <td>  Message </td>  <td>:</td> <td>'.$your_message.'</td>    </tr>           
              </table>
       <p style="margin-bottom: 0px;">Best regards,</p>
       <p><strong>'.$full_name.'</strong><p>
	     </body>
       </html>'; 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: contact@ocelotconsulting.in\r\n"; 
    	if(mail($to, $subject, $message, $headers))
	{
	    echo "<script>alert('Your contact details are sent successfully');</script>";
    		
	} 
	else
	{
	echo 'mail not sent';
	
	}
    
    
    
  }
  
  	?>
© 2018 GitHub, Inc.
