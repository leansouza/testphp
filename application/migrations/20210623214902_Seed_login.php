<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Seed_login extends CI_Migration {

    public function up()
    {
        foreach ($this->seedData as $seed ) {
            $sql = 'INSERT INTO login(login, password) VALUES '.$seed;
            $this->db->query($sql);
        }
    }

    public function down()
    {
            $sql = 'TRUNCATE TABLE login';
            $this->db->query($sql);
    }

    private $seedData = array(
        '("admin", "123456")',
        
    );
}