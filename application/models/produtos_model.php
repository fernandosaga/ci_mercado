<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model
{

    public function buscaTodos()
    {
        return $this->db->get('produtos')->result_array();
    }

}

/* End of file ModelName.php */
