<?php

declare(strict_types=1);

namespace App;
use mysqli;
use mysqli_sql_exception;

define("MYSQL_CONN_ERROR", "Unable to connect to database.");

require_once('controller.php');

class database {

    private $dsn;

    public function __construct(array $config)
    {
        $this->validateConfig($config);
        $this->createConnection($config);
    }

    public function tableRegister()
    {
        $base_name    = "checkout";
        $table_name   = "users";
        $table_orders = "orders";

        $query = mysqli_query($this->dsn, "SHOW TABLES LIKE '$table_orders'");
        $result = ($query->num_rows > 0) ? true : false ;

        $query2 = mysqli_query($this->dsn, "SHOW TABLES LIKE '$table_name'");
        $result2 = ($query2->num_rows > 0) ? true : false ;
        
        if($result == 1) {
            
        } else {
            $query = mysqli_query($this->dsn, "CREATE TABLE `checkout`.`orders` ( `id` INT NOT NULL AUTO_INCREMENT , `idusers` INT NOT NULL
        , `delivery` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `payment` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
         , `product` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `price` INT NOT NULL , `amount` INT NOT NULL , `comment`
          TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `time` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
        }

        if($result2 == 1) {
            
        } else {
            $query = mysqli_query($this->dsn, "CREATE TABLE `checkout`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `login` TEXT CHARACTER SET utf8
             COLLATE utf8_polish_ci NOT NULL , `password` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `name` TEXT CHARACTER SET utf8
              COLLATE utf8_polish_ci NOT NULL , `lastname` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `country` TEXT CHARACTER SET utf8
               COLLATE utf8_polish_ci NOT NULL , `address` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL ,
                `postcode` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL  , `city` TEXT CHARACTER SET
                utf8 COLLATE utf8_polish_ci NOT NULL , `phonenumber` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL ,
                 PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_polish_ci");
        }


    }

    public function saveDataRegister($data)
    {
         $this->tableRegister();

           $login        = $data['login'];
           $password     = $data['password'];
           $name         = $data['name'];
           $lastname     = $data['lastname'];
           $country      = $data['country'];
           $address      = $data['address'];
           $postcode     = $data['postcode'];
           $city         = $data['city'];
           $phonenumber  = $data['phonenumber'];
           $id           = 1;

         $postcode[3] = ' ';
         
         
         $query = mysqli_query($this->dsn, "INSERT INTO users (login, password, name, lastname,
         country, address, postcode, city, phonenumber) VALUES ('$login', '$password', '$name', '$lastname', '$country', '$address', '$postcode',
          '$city', $phonenumber)");

    }

    public function saveDataOrder($data)
    {


           $login        = $data['login'];

           $query   = mysqli_query($this->dsn, "SELECT * FROM users WHERE login = '$login'");
           $result  = mysqli_fetch_assoc($query);
           
           $idusers       = $result['id'];
           $delivery      = $data['delivery'];
           $payment       = $data['payment'];
           $product       = $data['product'];
           $price         = $data['price'];
           $amount        = $data['amount'];
           $other_address = $data['other_address'];

           $comment   = $data['comment'];
           $time          = date('Y-m-d H:i:s');

           $add_query = mysqli_query($this->dsn, "INSERT INTO orders (idusers, delivery, payment,
           product, price, amount, comment, time) VALUES ('$idusers', '$delivery', '$payment', '$product',
           '$price', '$amount', '$comment', '$time')");

           $id_query   = mysqli_query($this->dsn, "SELECT * FROM orders WHERE time = '$time'");
           $result_id  = mysqli_fetch_assoc($id_query);

           $_SESSION['id_order'] = $result_id['id'];
          

           if(!empty($_SESSION['id_order'])){
           echo "good";
           }

          $page = "finish";

          $_SESSION['page'] = $page;

          $controller = new controller();
          $controller->run();


    }

    private function createConnection(array $config): void
    {
        mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $this->dsn = new mysqli($config['host'], $config['user'], $config['password'], $config['database']);
    }
    
    private function validateConfig(array $config): void
    {

        if (empty($config['database'] || $config['host'] || $config['user'])){
            echo "error connect to database";
        }
    }
    

}