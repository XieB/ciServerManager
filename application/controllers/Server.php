<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/30 0030
 * Time: 下午 4:01
 */

class Server extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('server_model');
    }
    public function index()
    {
        $data['news'] = $this->server_model->get_servers();
    }
    public function index1(){
        echo 'index1';
    }
}