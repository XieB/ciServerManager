<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/30 0030
 * Time: 下午 3:50
 */

class Server_model extends CI_Model
{
    public function get_servers()
    {
//        $query = $this->db->query('select * from `xx_server`');
//        print_r($query);exit;
//        $this->db->where('exptime >', date('%Y-%m-%d %H:%M:%S'));
//        $query = $this->db->select();
        print_r( date('Y-m-d h:i:s'));exit;
        $this->db->where('exptime >', date('%Y-%m-%d %H:%M:%S'));
        $this->db->select('ip');
        $query = $this->db->get_compiled_select('server');
        print_r($query);
    }
}