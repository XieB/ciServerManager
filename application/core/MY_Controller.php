<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
        header('Access-Control-Allow-Methods:PUT,DELETE,POST,GET');
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'options') exit();
    }
}