<?php

/**
 * Projects
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Projects extends BaseProjects
{
    public function addProject(array $data) {
        $errors = $this->__validateProject($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $p = new Projects();
            $p->title = $data['title'];
            $p->description = $data['description'];
            $p->image = $errors['image'];
            $p->created_at = date('ymdHis');
            $p->save();

            return $errors;
        }
    }

    public function updateProject(array $data) {
        $errors = $this->__validateProject($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            Doctrine_Query::create()
                    ->update('Projects p')
                    ->set('p.title', '?', $data['title'])
                    ->set('p.description', '?', $data['description'])
                    ->set('p.image', '?', $errors['image'])
                    ->set('p.updated_at', '?', date('ymdHis'))
                    ->where('p.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function deleteProject($project_id) {
        Doctrine_Query::create()
                ->update('Projects p')
                ->set('p.deleted', '?', TRUE)
                ->where('p.id =?', $project_id)
                ->execute();
    }

    private function __validateProject($data) {
        $errors = array();
        $error_flag = false;

        if (!required($data['title'])) {
            $errors['title'] = 'Please write in event title';
            $error_flag = true;
        }
        if (!required($data['description'])) {
            $errors['description'] = 'Please write in service description';
            $error_flag = true;
        }

        if (isset($data['id'])) {
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {
                $upload_data = upload_file('projects', array('jpg|png|jpeg|gif'), '2028');
                if ($upload_data['error_flag']) {
                    $errors['image'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['image'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($data['image']) {
                $errors['image'] = $data['image'];
            }
        } else {
            $upload_data = upload_file('projects', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['image'] = $upload_data['upload_data']['file_name'];
            }
        }

        
        $errors['error_flag'] = $error_flag;

        return $errors;
    }
}