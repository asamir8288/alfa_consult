<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of project
 *
 * @author asamir
 */
class Project extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'List of Projects';
        $this->data['allProjects'] = ProjectsTable::getActiveProjects();

        $this->template->write_view('content', 'frontend/list_projects', $this->data);
        $this->template->render();
    }

    public function details($project_id) {
        if ($project_id) {
            $this->data['project'] = ProjectsTable::getOne($project_id);
            $this->data['page_title'] =  $this->data['project']['title'];
            
            $this->template->write_view('content', 'frontend/project_details', $this->data);
            $this->template->render();
        } else {
            redirect(site_url('project'));
        }
    }

}
