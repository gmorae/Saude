<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'libraries/contato/Validacao.php';
include APPPATH . 'libraries/contato/Contato.php';

class ContatoModel extends CI_Model
{

    public function salvar()
    {
        if (sizeof($_POST) == 0) return;
        $contato = new Validacao();
        $contato->validate();

        if ($this->form_validation->run()) {
            $dados = new Contato();
            $v = $contato->getData();
            $dados->gravar($v);
        } else { }
    }
    
}
