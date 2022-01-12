<?php

declare(strict_types=1);

namespace App;

// require_once('utils/debug.php');
require_once('database.php');
require_once('model.php');
require_once('view.php');


class controller {
    private static $config = [];
    protected $database;
    protected $model;
    private $view;
    protected $request;


    public static function configuration(array $configuration): void
    {
        self::$config = $configuration;
        
    }
    public function __construct()
    {
      $this->database = new database(self::$config['db']);
      $this->model    = new model();
      $this->view     = new view();

    }

    public function finish($page)
    {
       $view = $this->view;
       $view->start($page);
    }

    public function run()
    {  
        $page = $this->getRequestSession();

        $view = $this->view;
        $view->start($page);

        // require_once("layout.php");

    }

    public function check($data_checking, $data)
    {
      $model = $this->model;
      $model->check($data_checking, $data);
    }

    public function data($data)
    {
      $database = $this->database;
      $database->tableRegister($data);  
    }

    public function dataGrid($data)
    {
      $database = $this->database;
      $database->saveDataRegister($data);
    }

    public function dataRegister($data)
    {
      $database = $this->database;
      $database->saveDataRegister($data);
    }

    public function dataOrder($data)
    {
      $database = $this->database;
      $database->saveDataOrder($data);
    }

    public function getRequestSession()
    {
      if(!empty($_SESSION['page'])){
      $page = $_SESSION['page'];
      } else {
        $page = 'start';
      }



       return $page;
    }
}