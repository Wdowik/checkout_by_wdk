<?php

declare(strict_types=1);

namespace App;

class model{
   
   protected $controller;
   protected $database;
   protected $config;

   public function config()
   {
     $this->config = $config = [
         'db' => [
             'host'      => 'localhost',
             'database'  => 'checkout',
             'user'      => 'root',
             'password'  => ''
         ]
         ];
   }

   public function controller()
   {
      $this->config();
      $config = $this->config;

      Controller::configuration($config);  
      $this->controller = new controller();
   }

    public function check($checkData, $data)
    {

      $ready      = true;

      if($checkData[1] == 'undefined'){
         $ready = false;
      }

      if($checkData[2] == 'undefined'){
         $ready = false;
      }

      if($checkData[3] == 'undefined'){
         $ready = false;
      }

      if($ready = true){

         $this->checkProduct($data);
         $this->correctnessData($data);
         
      }

      if($ready = false){

      } else {
         return;
      }

    }

    public function checkProduct($data)
    {
      $idproduct    = 1; 
      $quantity     = 1;
      $priceproduct = 115;                // Cena produktu byłaby pobierana z bazy.
      $delivery     = $data['delivery'];
      

      if($delivery == 1) { $priceproduct = $priceproduct + 10.99;}
      if($delivery == 2) { $priceproduct = $priceproduct + 18;}
      if($delivery == 3) { $priceproduct = $priceproduct + 22;}

      $_SESSION['price']      = $priceproduct;
      $_SESSION['idproduct']  = $idproduct;
      $_SESSION['quantity']   = $quantity;

    }

    private function correctnessData($data)
    {
       $announcement = 0;
       $check[]        = 0;

       $login          = $data['login'];             if(is_numeric($login)){       $announcement = 1; $check[1] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[1] = 0; }
       $password       = $data['password'];          if(is_numeric($password)){    $announcement = 2; $check[2] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[2] = 0;}
       $name           = $data['name'];              if(is_numeric($name)){        $announcement = 3; $check[3] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[3] = 0;}
       $lastname       = $data['lastname'];          if(is_numeric($lastname)){    $announcement = 4; $check[4] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[4] = 0;}
       $address        = $data['address'];           if(is_numeric($address)){     $announcement = 5; $check[5] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[5] = 0;}
       $postcode       = $data['postcode'];          
       $city           = $data['city'];              if(is_numeric($city)){        $announcement = 7; $check[7] = 1;  $this->alertAnnouncement($announcement); }  else { $announcement = 0; $check[7] = 0;}
       $phonenumber    = $data['phonenumber'];       if(is_numeric($phonenumber)){ $announcement = 0; $check[8] = 0;} else { $announcement = 8; $check[8] = 1; $this->alertAnnouncement($announcement); }
       $delivery       = $data['delivery'];          
       $payment        = $data['payment'];
       $other_address  = $data['other_address'];
       $statute        = $data['statute'];
       $coment         = $data['comment'];

       $passwordrepeat = $data['passwordrepeat'];

       if($password == $passwordrepeat){
           $check[9] = 0;
       }
       else{
           $check[9] = 1;

           $announcement = 9;

           $this->alertAnnouncement($announcement);
       }

       $undefined = "undefined";

       if($delivery == $undefined){
         $check[10] = 1;

         $announcement = 10;

         $this->alertAnnouncement($announcement);
       } else {
          $check[10] = 0;
       }

      if($payment == $undefined){
         $check[11] = 1;

         $announcement = 11;

         $this->alertAnnouncement($announcement);
       } else {
         $check[11] = 0;
      }

       if($check[1] == 0 & $check[2] == 0 & $check[3] == 0 &
          $check[4] == 0 & $check[5] == 0 & 
          $check[7] == 0 & $check[8] == 0 & $check[9] == 0 & $check[10] == 0 & $check[11] == 0){

            $this->addSlash($data);
       } else { 
          
       }
   
    }

    public function alertAnnouncement($data)
    {
      if($data == 1) { echo "<br></br>"; echo "Login nie może składać się z samych cyfr. ";}
      if($data == 2) { echo "<br></br>"; echo "Hasło nie może składać się z samych cyfr. ";}
      if($data == 3) { echo "<br></br>"; echo "Imię nie może zawierać liczb naturalnych. ";}
      if($data == 4) { echo "<br></br>"; echo "Nazwisko nie może zawierać liczb naturalnych. ";}
      if($data == 5) { echo "<br></br>"; echo "Adres nie może składać się z samych cyfr. ";}
      if($data == 6) { echo "<br></br>"; echo "Kod pocztowy nie może zawierać liter. ";}
      if($data == 7) { echo "<br></br>"; echo "Miasto nie może zawierać cyfr.";}
      if($data == 8) { echo "<br></br>"; echo "Numer telefonu nie może zawierać liter.";}
      if($data == 9) { echo "<br></br>"; echo "Źle przepisałeś hasło.";}
      if($data == 10) { echo "<br></br>"; echo "Wybierz dostawcę.";}
      if($data == 11) { echo "<br></br>"; echo "Wybierz rodzaj płatności.";}  
 
       
       
       
       
       
       
       
   }

   public function addSlash($data)
   {
      $login          = addslashes($data['login']);            
      $password       = addslashes($data['password']); 
      $name           = addslashes($data['name']);
      $lastname       = addslashes($data['lastname']);
      $country        = addslashes($data['country']);
      $address        = addslashes($data['address']); 
      $postcode       = addslashes($data['postcode']); 
      $city           = addslashes($data['city']);
      $phonenumber    = addslashes($data['phonenumber']);
      $delivery       = addslashes($data['delivery']);          
      $payment        = addslashes($data['payment']);
      $other_address  = addslashes($data['other_address']);
      $comment         = addslashes($data['comment']);


      $dataOrder = [
         'login'          => $login,
         'delivery'       => $delivery,
         'payment'        => $payment,
         'product'        => $_SESSION['idproduct'],
         'price'          => $_SESSION['price'],
         'amount'         => $_SESSION['quantity'],
         'other_address'  => $other_address,
         'comment'        => $comment
     ];

     $dataRegister = [
      'login'          => $login,
      'password'       => $password,
      'passwordrepeat' => $lastname,
      'name'           => $name,
      'lastname'       => $lastname,
      'country'        => $country,
      'address'        => $address,
      'postcode'       => $postcode,
      'city'           => $city,
      'phonenumber'    => $phonenumber,
      'delivery'       => $delivery,
      'payment'        => $payment,
      'other_address'  => $other_address,
      'comment'        => $comment
     ];

      $this->dataRegisterUser($dataRegister);
      $this->dataOrder($dataOrder);

   }

   public function dataRegisterUser($data)
   {
        $this->controller();
        $controller = $this->controller;
        $controller->dataRegister($data);
   }

   public function dataOrder($data)
   {
        $this->controller();
        $controller = $this->controller;
        $controller->dataOrder($data);
   } 

}