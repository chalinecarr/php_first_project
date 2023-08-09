<?php

  $array = array("firstname" => "", "name" => "", "email" => "", "phone" =>"", "message" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false ) ;

  $emailTo = "chalinecarr@gmail.com" ;


 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $array["firstname"] = verifyInput($_POST["firstname"]);
  $array["name"] = verifyInput($_POST["name"]);
  $array["email"] = verifyInput($_POST["email"]);
  $array["phone"] = verifyInput($_POST["phone"]);
  $array["message"] = verifyInput($_POST["message"]);
  $array["isSuccess"] = true;
  $emailText = "" ;

    if(empty($array["firstname"]))
    {
      $array["firstnameError"] = "Il nous faut un prénom!";
      $array["isSuccess"] = false;
    }
    else
    {
    // .= to concatenate
    $emailText .= "FirstName: {$array["firstname"]}\n";
    }

   if(empty($array["name"]))
   {
    $array["nameError"] = "Il nous faut un nom!";
    $array["isSuccess"] = false;
   }
   else
   {
   // .= to concatenate
   $emailText .= "Name: {$array["name"]}\n" ;
   }


   if(!isEmail($array["email"]))
   {
    $array["emailError"] = "Il nous faut un email!";
    $array["isSuccess"] = false;
    }
    else
    {
      // .= to concatenate
      $emailText .= "Email: {$array["email"]}\n";
    }

    if(!isPhone($array["phone"]))
    {
      $array["phoneError"] = "Il nous faut un mobile : chiffres et espaces!";
      $array["isSuccess"] = false;
    }
    else
    {
      // .= to concatenate
      $emailText .= "Phone: {$array["phone"]}\n";
    }

    if(empty($array["message"]))
     {
      $array["messageError"] = "Il nous faut un message!";
      $array["isSuccess"] = false;
     }
     else
     {
     // .= to concatenate
     $emailText .= "Message: {$array["message"]}\n" ;
     }

  if($array["isSuccess"]);
  {
    $headers = "From : {$array["firstname"]}, {$array["fname"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}" ;
    mail($emailTo, "Un message de votre site.", $emailText, $headers);
  }

  echo json_encode($array) ;

  }

 function verifyInput($var)
  {
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }

  function isPhone($var)
  {
    return preg_match("/^[0-9]*$/", $var);
  }

  function isEmail($var)
  {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
  }
?>
