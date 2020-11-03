<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "igornesan@gmail.com";
    $email = "Port@frontchef.com.ua";
    $useremail = $_POST['email'];
    $name = $_POST['name'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
    $formmsg = $_POST['message'];
    $message = "Получена заявка с сайта https://port.frontchef.com.ua: \n\nИмя: " . $name .  "\nSubject: " . $subject .  "\nEmail: " . $useremail . "\nТелефон: " . $phone . "\nСообщение: " . $formmsg;
    
    //send email
    mail($admin_email, "Port Application", $message, "From:" . $email);
    
    header('Location: http://port.frontchef.com.ua/success.html');
  }
  ?>