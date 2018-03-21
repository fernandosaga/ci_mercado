<?php

class Produtos extends CI_Controller
{
    public function index()
    {
        // $produtos = array();
        // $bola = array('nome' => 'Bola de Futebol', 'descricao' => 'Bola de futebol assinada pelo Zico.', 'preco' => 300);
        // $hd = array('nome' => 'HD Externo', 'descricao' => 'HD 1TB .', 'preco' => 400);
        // array_push($produtos, $bola, $hd);

        $this->load->database();

        $this->load->model('Produtos_model');
        $produtos = $this->Produtos_model->buscaTodos();
        
        $dados = array("produtos" => $produtos);

        $this->load->helper('url');

        $this->load->view("produtos/index.php", $dados);
    }
}