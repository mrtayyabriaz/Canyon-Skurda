<?php

if (isset($_POST['sendcode'])) {
  echo 'posted';
  include "dbconnect.php";
  $id = $_SESSION['ID'];
  $query = "SELECT * FROM `userdata` WHERE ID = $id";
  if (mysqli_num_rows($result = mysqli_query($link, $query)) > 0) {
    $row = mysqli_fetch_array($result);
    $vercode = $row['verify-code'];
    $email = 'tayyab914ll@gmail.com';
    $to = $email;
    $subject = "New Contact Message - kotor Canyoning";
    $body = '    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Verification Mail - My Earning City</title>
    </head>
    
    <body>
      <div style="background-color: #b6b6b6;padding: 30px;font-family: sans-serif;">
        <div style="background-color: white;border-radius: 10px;padding-left: 10%;">
          <div style="width: 100%;text-align: center;">
            <img src="https://myearningcity.com/images/small%20logo.webp" width="100px" height="100px">
          </div>
    
          <div style="font-family: sans-serif;width: 100%;">
          <p style="width: 100%;text-align: center;color: rgb(0, 79, 163);">
          Hi,' . $_SESSION['name'] . '</p>
        <p style="width: 100%;text-align: center;color: rgb(0, 185, 0);">
          Thank you for opening your account with us!
        </p>
          </div>
          <div style="font-weight:bold;width: 100%;
              ">
            Your My Earning City Account verification code is <br>
            <h3
              style="color: white;background-color: blue;padding: 15px;border-radius: 20px;margin-top: 10px;margin-bottom: 10px;width: fit-content;">
              ' . $vercode . '
            </h3>
            Do Not Share It With Others.
            <div>
              Go to My Earning City <a href="https://myearningcity.com/verify-mail.php"> verificatin page</a> and enter this
              pin to verify your account.
            </div>
    
            <div style="padding:10%;">
              Regards,
              <h2 style="color: rgb(4, 154, 4);">My Earning City</h2>
            </div>
          </div>
        </div>
      </div>
    
    </html>
    ';
    $headers = "From: My Earning City <support@myearningcity.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type:text/html;cherset=UTF-8\r\n";
    // if (1 == 1) {
    if (mail($to, $subject, $body, $headers)) {
      echo '<div class="dflex text-success" style="flex-direction: column;">
        Verification Code has been sent to your Email.<br>
            check your <strong>spam</strong> or <strong>Junk</strong> folder if did not found in your Inbox.
          </div> ';
    } else {
      echo "error";
    }
  }
} else {
  echo "post error";
}

?>