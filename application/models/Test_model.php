<?php
class Test_model extends CI_Model {
    public $name;
    public $description;
    public $category_id;
    public $year;
    public $created;

   

    public function get_last_three_movies()
{
    $config['hostname'] = 'localhost';
    $config['username'] = 'root';
    $config['password'] = '';
    $config['database'] = 'marcin_test';
    $config['dbdriver'] = 'mysqli';
    $config['dbprefix'] = '';
    $config['pconnect'] = FALSE;
    $config['db_debug'] = TRUE;
    $config['cache_on'] = FALSE;
    $config['cachedir'] = '';
    $config['char_set'] = 'utf8';
    $config['dbcollat'] = 'utf8_unicode_ci';
    
    $this->load->database($config);

        //$query = $this->db->get('movies', 4);
        $query = $this->db->get('movies');
        return $query->result();
}

public function insert_movie($namefunc, $descriptionfunc, $category_idfunc, $yearfunc, $createdfunc)
        {
            $config['hostname'] = 'localhost';
            $config['username'] = 'root';
            $config['password'] = '';
            $config['database'] = 'marcin_test';
            $config['dbdriver'] = 'mysqli';
            $config['dbprefix'] = '';
            $config['pconnect'] = FALSE;
            $config['db_debug'] = TRUE;
            $config['cache_on'] = FALSE;
            $config['cachedir'] = '';
            $config['char_set'] = 'utf8';
            $config['dbcollat'] = 'utf8_unicode_ci';
            
            $this->load->database($config);

                //$this->name = $_POST['title']; // please read the below note
                $this->name = $namefunc;
                $this->description  = $descriptionfunc;
                $this->category_id = $category_idfunc;

                $this->year = $yearfunc;
                $this->created = $createdfunc;

                $this->db->insert('movies', $this);
        }
}

