<?php

/**
 * ProjectImages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProjectImages extends BaseProjectImages {

    public function addProjectImage(array $data) {
        $errors = $this->__validateImage($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $p = new ProjectImages();
            $p->project_id = $data['project_id'];
            $p->image = $errors['image'];
            $p->created_at = date('ymdHis');
            $p->save();

            return $errors;
        }
    }

    public function deleteImage($image_id) {
        Doctrine_Query::create()
                ->delete('ProjectImages pi')                
                ->where('pi.id =?', $image_id)
                ->execute();
    }

    private function __validateImage($data) {
        $errors = array();
        $error_flag = false;

        $upload_data = upload_file('projects', array('jpg|png|jpeg|gif'), '2028');
        if ($upload_data['error_flag']) {
            $errors['image'] = $upload_data['errors'];
            $error_flag = true;
        } else {
            $errors['image'] = $upload_data['upload_data']['file_name'];
        }


        $errors['error_flag'] = $error_flag;

        return $errors;
    }

}