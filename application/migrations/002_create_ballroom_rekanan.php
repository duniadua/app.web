<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_create_ballroom_rekanan
 *
 * @author sahid
 */
class Migration_create_ballroom_rekanan extends CI_Migration{
    //put your code here
    public function up(){
        $this->load->dbforge();
        $rekanan_fields = array(
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
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        );

        $this->dbforge->add_field($rekanan_fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('ballroom_rekanan');
    }
    
    public function down(){
        $this->dbforge->drop_table('ballroom_rekanan');
    }
}

?>
