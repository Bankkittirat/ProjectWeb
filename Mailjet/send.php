<?php
  	 session_start();  
    include('../login/condb.php');
    
    $ID = $_SESSION['ID'];
    $name = $_SESSION['name'];
    $level = $_SESSION['level'];
    $loginn = $_SESSION['login_in'];
    $_SESSION['ERT']= $_POST['id'];
    $commentt = $_SESSION["commento"];
    $Mcoin =  $_SESSION["coin"];
    $mail = $_SESSION["Email"];
    $member = $_POST['member'];
    $Gname = $_POST['Gname'];
    $order_time = $_POST['order_time'];
    $username = $_POST['username'];
    
   
    // $_SESSION['namepu'] = $_POST['username'];
    // $_SESSION['emailpu'] = $_POST['member'];
    // $_SESSION['gamepu'] = $_POST['Gname'];
    // $_SESSION['velapu']=$_POST['order_time'];

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
          'Name' => "CSGAMESTORE"
        ],
        'To' => [
          [
            'Email' => "$member",
            'Name' => "$username"
          ]
        ],
        'Subject' => "คำสั่งซื้อของคุณได้รับการยืนยันเรียบร้อย",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>คำสั่งซื้อเกม : $Gname  <br>
        <a>เวลา : $order_time </a></h3><br />คีย์เกมของคุณ $username คือ : $POIU  <br><br>
        <img src='https://scontent.fubp1-1.fna.fbcdn.net/v/t1.0-9/14681838_195903614176716_7113121991496901058_n.jpg?_nc_cat=111&_nc_sid=7aed08&_nc_ohc=ydiSOHXegWAAX8AaEld&_nc_ht=scontent.fubp1-1.fna&oh=c4833fd2a98f764e9912d4c5d38ab698&oe=5E93FA20'><br>
        <h3>ขอขอบพระคูณที่ใช้บริการเว็บของเรา ไว้กลับมาอุดหนุนเราอีกนะฮัฟฟฟฟฟฟ</h3>",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  Header("Location: ../sentcom.php");
//   composer require mailjet/mailjet-apiv3-php
?>
