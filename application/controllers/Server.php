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
    }
    public function index_get($id){
        $this->db->where('id',$id);
        $this->response($this->db->get('server')->row_array());
    }
    public function index_post(){
        if ($this->db->insert('server', $this->post())){
            $this->response([],201);
        }
    }
    public function index_put(){
        $this->db->set($this->put());
        $this->db->where('id', $this->put('id'));
        if ($this->db->update('server')){
            $this->response([],201);
        }
    }
    public function index_delete($id){
        $this->db->where('id', $id);
        if ($this->db->delete('server')){
            $this->response([],204);
        }
    }
    public function lists_get(){
        $this->response($this->db->get('server')->result_array());
    }
}