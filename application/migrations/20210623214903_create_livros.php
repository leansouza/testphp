<?php

// Perceba os maiúsculos em Migration e na primeira letra do restante
class Migration_Create_livros extends CI_Migration {

    public function up() { 
        $this->dbforge->add_field(array(
        'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
        ),
        'titulo' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
        ),
        'descricao' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
        ),
        'autor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
        ),
        'datacadastro' => array(
                'type' => 'date',
                'null' => TRUE
        ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('livros');
}

public function down()
{
    $this->dbforge->drop_table('livros');
}
}
