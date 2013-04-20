<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_create_table
 *
 * @author sahid
 */
class Migration_create_ballroom_catagory extends CI_Migration{
    //put your code here
     public function up() {
        $this->load->dbforge();
        $cat_fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'type' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        );

        $this->dbforge->add_field($cat_fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('ballroom_catagory');
     }
     
     public function down(){
        $this->dbforge->drop_table('ballroom_catagory');
    }
}

?>
