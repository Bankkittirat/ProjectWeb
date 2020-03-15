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
            'Email' => "kittirat.ao.61@ubu.ac.th",
            'Name' => "Csgamestore"
          ]
        ],
        'Subject' => "มีผู้ใช้งานได้รับการชำระเงินเรียบร้อยแล้ว",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>ผู้ใช้งานชื่อ $name ได้ทำการแจ้งชำระเงินเป็นที่เรียบร้อย<br>
        <a></a></h3><br />กรุณา Login เข้าสู่หน้า Admin เพื่อเช็คและยืนยันการทำรายการ<br><br><br>
        <h3>ขอขอบพระคูณที่ใช้บริการเว็บของเรา ไว้กลับมาอุดหนุนเราอีกนะฮัฟฟฟฟฟฟ</h3>",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  Header("Location: ../payment/paid.php");
//   composer require mailjet/mailjet-apiv3-php
?>
