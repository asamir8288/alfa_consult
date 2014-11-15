<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of site
 *
 * @author asamir
 */
class Site extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function about_us() {
        $page_id = 'about-us';

        $this->data['page_title'] = 'About Company';
        $this->data['submit_btn'] = 'Update About Us';
        $this->data['post_url'] = 'admin/site/about_us';
        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $sp = new StaticPages();
            $sp->updateStaticPage($_POST);
            
            redirect(site_url('admin/site/about_us'));
        }

        $this->template->write_view('content', 'backend/static_page', $this->data);
        $this->template->render();
    }

    public function licences_certificates() {
        $page_id = 'licences-certificates';

        $this->data['page_title'] = 'Licences & Certificates';
        $this->data['submit_btn'] = 'Update Licences';
        $this->data['post_url'] = 'admin/site/licences_certificates';
        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $sp = new StaticPages();
            $sp->updateStaticPage($_POST);
            
            redirect(site_url('admin/site/licences_certificates'));
        }

        $this->template->write_view('content', 'backend/static_page', $this->data);
        $this->template->render();
    }

    public function contact_us() {
        $page_id = 'contact-us';

        $this->data['page_title'] = 'Contact Us';
        $this->data['submit_btn'] = 'Update contact us';
        $this->data['post_url'] = 'admin/site/contact_us';
        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $sp = new StaticPages();
            $sp->updateStaticPage($_POST);
            
            redirect(site_url('admin/site/contact_us'));
        }

        $this->template->write_view('content', 'backend/static_page', $this->data);
        $this->template->render();
    }

}
