<?php

/**
 * ProjectImagesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProjectImagesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProjectImagesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ProjectImages');
    }
    
    public static function getProjectImages($project_id) {
        return Doctrine_Query::create()
                ->select('pi.*')
                ->from('ProjectImages pi')
                ->where('pi.project_id=?', $project_id)
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->execute();
    }
}