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
class Project extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'List All Projects';

        $this->data['activeProjects'] = ProjectsTable::getActiveProjects();
        $this->template->write_view('content', 'backend/projects/list_projects', $this->data);
        $this->template->render();
    }

    public function add_edit_project($project_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->template->add_css('layout/css/jquery-ui.css');
        $this->template->add_js('layout/js/admin/jquery-ui.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/project/add_edit_project';
        if ($project_id) {
            $this->data['page_title'] = 'Update Project';
            $this->data['submit_btn'] = 'Update';
            $this->data['post_url'] = 'admin/project/add_edit_project/' . $project_id;
            $this->data['data'] = ProjectsTable::getOne($project_id);
        } else {
            $this->data['page_title'] = 'Add Project';
            $this->data['submit_btn'] = 'Add';
        }

        if ($this->input->post('submit')) {

            $p = new Projects();

            if ($project_id) {
                $_POST['id'] = $project_id;
                $errors = $p->updateProject($_POST);
            } else {
                $errors = $p->addProject($_POST);
            }


            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/projects/add_edit_project', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($project_id) ? 'Your project has been updated successfully.' : 'Your project has been added successfully.')
                );
                redirect('admin/project');
            }
        } else {
            $this->template->write_view('content', 'backend/projects/add_edit_project', $this->data);
            $this->template->render();
        }
    }

    public function delete_project($project_id) {
        $p = new Projects();
        $p->deleteProject($project_id);

        redirect('admin/project');
    }

    public function project_image($project_id) {
        if ($this->input->post('submit')) {
            $pi = new ProjectImages();
            $_POST['project_id'] = $project_id;
            $errors = $pi->addProjectImage($_POST);

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/projects/project_images', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => 'Your Image has been added successfully.')
                );
                redirect('admin/project/project_image/' . $project_id);
            }
        } else {
            $this->data['page_title'] = 'Add product\'s images';
            $this->data['submit_btn'] = 'Add Image';
            $this->data['post_url'] = 'admin/project/project_image/' . $project_id;
            $this->data['projectImages'] = ProjectImagesTable::getProjectImages($project_id);

            $this->template->write_view('content', 'backend/projects/project_images', $this->data);
            $this->template->render();
        }
    }

    public function delete_project_image($image_id, $project_id) {
        $pi = new ProjectImages();
        $pi->deleteImage($image_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'Your Image has been deleted successfully.')
        );
        redirect('admin/project/project_image/' . $project_id);
    }

}
