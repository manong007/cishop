<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#ǰ̨��������
class Home_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->switch_themes_on(); //���Ƥ�����ܵĿ���
    }   
}


#��̨��������
class Admin_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->switch_themes_off();
    }
}