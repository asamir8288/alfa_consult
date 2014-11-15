<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 */
class Home extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Alfa Consult';
        $this->data['services'] = ServicesTable::getActiveServices(1);
        $this->data['projects'] = ProjectsTable::getActiveProjects(2);
        $page_id = 'about-us';
        $this->data['aboutUs'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/home', $this->data);
        $this->template->render();
    }

    public function about_us() {
        $this->data['page_title'] = 'About Us';
        $page_id = 'about-us';
        
        $this->data['service'] = ServicesTable::getRandOne();
        $this->data['project'] = ProjectsTable::getRandOne();
        
        $this->data['page'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/about_us', $this->data);
        $this->template->render();
    }
    
    public function  licences_certificates() {
        $this->data['page_title'] = 'LICENCES & CERTIFICATES';
        $page_id = 'licences-certificates';
        
        $this->data['service'] = ServicesTable::getRandOne();
        $this->data['project'] = ProjectsTable::getRandOne();
        
        $this->data['page'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/license_certificates', $this->data);
        $this->template->render();
    }
    
    public function  contact_us() {
        $this->data['page_title'] = 'Contact Us';
        $page_id = 'contact-us';        
        
        $this->data['page'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/contact_us', $this->data);
        $this->template->render();
    }

}
