<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Task7.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <Style>
        input[type=number] {
        width: 20%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
  }

  #sub {
    width: 5%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
   </Style>
</head>
<body>

<?php
    class verifyOtp{
        function verifying($inotp,$orotp)
        {
            if($inotp == $orotp)
            {
                return true;
            }
            return false;
        }
    }
?>

<h5 id="ab"></h5>
<h5 id="ab2"></h5>
<h5 id="ab3"></h5>
<h5 id="ab4"></h5>


<?php

use PHPMailer\PHPMailer\PHPMailer;

    class Student{
        public $name;
        public $email;
        public function New_Registration($name, $email){
            $this->name = $name;
            $this->email = $email;
            $arr = [$this->name, $this->email];
            return $arr;
    }
}


$res = new Student();
$res1 = $res->New_Registration($_POST['name'], $_POST['email']);


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "ajitanand14@gmail.com";
$mail->Password = "madanmohan";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$otp = rand(1001,9999);

$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress($email);
$mail->Subject = ("$email");
$mail->Body = 'Your otp for Registration is: '.$otp;



if($mail->send())
{
    echo "<h1 id='h4'>" . "Enter otp sent to your email id: $email or check your $phone" ."</h4>".'<br>'; 
    echo "<input type='number' id='num' name='num' placeholder = 'Otp....'>" .'<br>';
    echo "<button id='sub' onclick='abc()'>Submit</button>";
    
    
$fields = array(
    "sender_id" => "CHKSMS",
    "message" => "2",
    "variables_values" => $otp,
    "route" => "s",
    "numbers" => $_POST['phone'],
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: BAktNRZWcsPU8qeCd1ruTmf4XzFJhyYxV2E3aOlGpgKQI7v90LmPBkfUoOiD9MceZTI1WlAjtLr3bH78",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}


}
else
{
    echo "<h1>Eeee Error!!....Please Check Your Email ID and Try again</h1>";
}


echo "

<script>
    function abc(){
        if($('#num').val() == ".$otp.")
        {
            $('#ab').text('Congraluations...You Are Registered!!! now');
            $('#ab2').text('Name: ".$_POST['name']."');
            $('#ab3').text('Email: ".$_POST['email']."');
            $('#ab4').text('Phone No: ".$_POST['phone']."');
            $('#num').css('display','none');
            $('#sub').css('display','none');
            $('#h4').css('display','none');
        }
        else{
            $('#ab').text('Wrong OTP');
        }
    }
</script>";

?>
</body>
</html>




