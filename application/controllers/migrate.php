<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of migration
 *
 * @author sahid
 */
class migrate extends CI_Controller {

//put your code here
    public function run() {
        if (!$this->migration->latest()) {
            show_error($this->migration->error_string());
        }
    }
    
    public function rollback(){
        if(!$this->migration->version(0)){
            show_error($this->migration->error_string());
        }
    }

}

?>
