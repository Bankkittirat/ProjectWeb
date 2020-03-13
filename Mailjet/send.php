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
          'Name' => "Bank"
        ],
        'To' => [
          [
            'Email' => "$mail",
            'Name' => "$name"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />คีย์เกมของคุณ $name คือ .......",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
//   composer require mailjet/mailjet-apiv3-php
?>
