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
class Service extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'List of Services';
        $this->data['allServices'] = ServicesTable::getActiveServices();
        
        $this->template->write_view('content', 'frontend/list_services', $this->data);
        $this->template->render();
    }

}
