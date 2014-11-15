<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of service
 *
 * @author asamir
 */
class Service extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'List All Services';
        
        $this->data['activeServices'] = ServicesTable::getActiveServices();
        $this->template->write_view('content', 'backend/services/list_services', $this->data);
        $this->template->render();
    }
    
    public function add_edit_service($service_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        
        $this->template->add_css('layout/css/jquery-ui.css');
        $this->template->add_js('layout/js/admin/jquery-ui.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/service/add_edit_service';
        if ($service_id) {
            $this->data['page_title'] = 'Update Service';
            $this->data['submit_btn'] = 'Update';
            $this->data['post_url'] = 'admin/service/add_edit_service/' . $service_id;
            $this->data['data'] = ServicesTable::getOne($service_id);
        }else{
            $this->data['page_title'] = 'Add Service';
            $this->data['submit_btn'] = 'Add';
        }

        if ($this->input->post('submit')) {

            $s = new Services();

            if ($service_id) {
                $_POST['id'] = $service_id;
                $errors = $s->updateService($_POST);
            } else {
                $errors = $s->addService($_POST);
            }
            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/services/add_edit_service', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($service_id) ? 'Your service has been updated successfully.' : 'Your service has been added successfully.')
                );
                redirect('admin/service');
            }
        } else {
            $this->template->write_view('content', 'backend/services/add_edit_service', $this->data);
            $this->template->render();
        }
    }

    public function delete_service($service_id) {
        $s = new Services();
        $s->deleteService($service_id);

        redirect('admin/service');
    }
}
