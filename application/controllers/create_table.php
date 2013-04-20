<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of create_table
 *
 * @author sahid
 */
class create_table extends CI_Controller {

    public function Create_table() {
        parent::__construct();
        $this->load->dbforge();
    }

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
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('ballroom_catagory');

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
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('ballroom_rekanan');
    }

    public function down() {
        $this->load->dbforge();
        $this->dbforge->drop_table('ballroom_catagory');
        $this->dbforge->drop_table('ballroom_rekanan');
    }

}

?>
