<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author asamir
 */
class Dashboard extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->template->render();
    }
}
