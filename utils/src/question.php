<?php

declare(strict_types=1);

namespace App;


// $config = [
//     'db' => [
//         'host'      => 'localhost',
//         'database'  => 'checkout',
//         'user'      => 'root',
//         'password'  => ''
//     ]
//     ];



require_once("./database.php");
require_once("./model.php");

$request = [
    'get'  => $_GET,
    'post' => $_POST
];

$config = require_once('../src/config/config.php');


    if(!empty($_POST)){   

        $data = [
            'login'          => $_POST['login'],
            'password'       => $_POST['password'],
            'passwordrepeat' => $_POST['passwordrepeat'],
            'name'           => $_POST['name'],
            'lastname'       => $_POST['lastname'],
            'country'        => $_POST['country'],
            'address'        => $_POST['address'],
            'postcode'      => $_POST['postcode'],
            'city'           => $_POST['city'],
            'phonenumber'    => $_POST['phonenumber'],
            'delivery'       => $_POST['delivery'],
            'payment'        => $_POST['payment'],
            'other_address'  => $_POST['other_address'],
            'statute'        => $_POST['statute'],
            'comment'        => $_POST['comment']
        ];
        
        $data_checking = [
            1       => $data['delivery'],
            2       => $data['payment'],
            3       => $data['statute']
        ];

        Controller::configuration($config);

        $controller = new Controller($request);

        $controller->check($data_checking, $data);
        }
    
 else {
    echo "<br></br>";
    echo "Błąd";
}
