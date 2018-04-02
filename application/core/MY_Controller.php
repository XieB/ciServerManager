<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        print_r(get_included_files());
    }
}