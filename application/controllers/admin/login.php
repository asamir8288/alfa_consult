<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends MY_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
//        var_dump($_POST);exit;
        if($this->input->post('submit')){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if($username == 'admin' && $password == '123456'){
                $this->session->set_userdata('is_login' , true);
                redirect(site_url('admin/dashboard'));
            }else{
                redirect(site_url('admin/login'));
            }
        }
        
        $this->data['page_title'] = 'Login';
        
        $this->template->write_view('content', 'backend/login_view', $this->data);
        $this->template->render();
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}
