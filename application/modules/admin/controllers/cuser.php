<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cuser extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('admin/Adminmodel');
    }
    function index() {
        
        $check = $this->session->userdata('admin');
        if(isset($check) && count($check) && ($check['logged_in']==TRUE)){
        $temp['info'] = $check;
        $temp['title']='trang quản trị';
        $temp['template']='user_control';
        $temp['data'] = $this->Adminmodel->getAll('user');
        $this->load->view('layout_admin/layout',$temp);
        }
        else redirect('admin/adminhome/login');
    }
}