<?php
  	 session_start();  
    include('../login/condb.php');
    
    $ID = $_SESSION['ID'];
      $name = $_SESSION['name'];
    $level = $_SESSION['level'];
    $loginn = $_SESSION['login_in'];
    $commentt = $_SESSION["commento"];
    $Mcoin =  $_SESSION["coin"];
    $mail = $_SESSION["Email"];
    $member = $_POST['member'];
    $Gname = $_POST['Gname'];
    $order_time = $_POST['order_time'];
    $username = $_POST['username'];

    $n=10; 
    function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
          } 
    
    $POIU = getName($n);
    
  
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('cb2a2a17222312116125508cd6932f8e','a8e24f11f73b37dbe1f962b33c5d22fe',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "banklovecom1669@gmail.com",
          'Name' => "เราไง เราเอง"
        ],
        'To' => [
          [
            'Email' => "tangmonaka1999@gmail.com",
            'Name' => "แตงโมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมม"
          ]
        ],
        'Subject' => "แจ้งยอดค้างชำระเงินของคุณ",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>คำสั่งซื้อเกม : GTA V SUper super very Edition  <br>
        <a>เวลา : เมื่อกี้เองครับ </a></h3><br />คีย์เกมของคุณ พัธนิกร คือ : $POIU  <br><h3>กรุณาชำระเงิน จำ นวน 10,000,000 ภายในวันนี้ด้วยขอบคุณครับ</h3>",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  ;
//   composer require mailjet/mailjet-apiv3-php
?>
