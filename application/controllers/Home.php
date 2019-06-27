<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('home/carousel');
		$this->load->view('empresa/inicio');
		$this->load->view('empresa/valores');
		$this->load->view('home/parceiros');
		$this->load->view('whats/botao');
		$this->load->view('common/rodape');
		$this->load->view('common/footer');
	}
	public function servicos()
	{
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        // banco de dados
        $this->load->model('ServicoModel', 'servico');
        $pilates = $this->servico->pilates($id = 1 );
        $massagem = $this->servico->massagem($id = 2 );
        $acupuntura = $this->servico->acupuntura($id = 3 );
        $postura = $this->servico->postura($id = 4 );
        $estetica = $this->servico->estetica($id = 5 );
     
		
        // fotos para a página
        $massagem ['foto'] = base_url('imagens/servicos/massagem.jpg');
        $acupuntura ['foto'] = base_url('imagens/servicos/acupuntura.jpg');
        $pilates ['foto'] = base_url('imagens/servicos/pilates.jpg');
        $postura ['foto'] = base_url('imagens/servicos/postura.jpg');
        $estetica ['foto'] = base_url('imagens/servicos/estetica.jpg');
        

        // botao
        // paginas 
        
		$this->load->view('servico/cabecalho');
		
        $this->load->view('servico/direita', $massagem);
        $this->load->view('servico/linha');
        $this->load->view('servico/esquerda', $acupuntura);
        $this->load->view('servico/direita', $pilates);
        $this->load->view('servico/linha');
        $this->load->view('servico/esquerda', $postura);
        $this->load->view('servico/direita', $estetica);
        $this->load->view('whats/botao');
        $this->load->view('common/rodape');
        $this->load->view('common/footer');
	}
	public function estruturas()
	{
		$this->load->view('common/header');
        $this->load->view('common/navbar');
        // banco de dados
        $this->load->model('EstruturaModel', 'estrutura');
        $espera = $this->estrutura->espera($id = 1 );
        $recepcao = $this->estrutura->recepcao($id = 2 );
        $crianca = $this->estrutura->crianca($id = 3 );
        $massagem = $this->estrutura->massagem($id = 4 );
        $pilates = $this->estrutura->pilates($id = 5 );
        $postura = $this->estrutura->postura($id = 6 );
		$escritorio = $this->estrutura->escritorio($id = 7 );
		$deposito = $this->estrutura->deposito($id = 8 );
		$estetica = $this->estrutura->estetica($id = 9 );
		
        // fotos para a página
        $recepcao ['foto'] = base_url('imagens/estrutura/recepcao.jpg');
        $crianca ['foto'] = base_url('imagens/estrutura/crianca.jpg');
        $espera ['foto'] = base_url('imagens/estrutura/espera.jpg');
        $massagem ['foto'] = base_url('imagens/estrutura/massagem.jpg');
        $pilates ['foto'] = base_url('imagens/estrutura/pilates.jpg');
        $postura ['foto'] = base_url('imagens/estrutura/postura.jpg');
        $escritorio ['foto'] = base_url('imagens/estrutura/escritorio.jpg');
        $deposito ['foto'] = base_url('imagens/estrutura/deposito.jpg');
        $estetica ['foto'] = base_url('imagens/estrutura/estetica.jpg');

        // botao
        // paginas 
        
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/direita', $recepcao);
        $this->load->view('estrutura/linha');
        $this->load->view('estrutura/esquerda', $crianca);
        $this->load->view('estrutura/direita', $espera);
        $this->load->view('estrutura/linha');
        $this->load->view('estrutura/esquerda', $massagem);
        $this->load->view('estrutura/direita', $pilates);
        $this->load->view('estrutura/linha');
        $this->load->view('estrutura/esquerda', $postura);
        $this->load->view('estrutura/direita', $estetica);
        $this->load->view('estrutura/linha');
        $this->load->view('estrutura/esquerda', $deposito);
        $this->load->view('estrutura/direita', $escritorio);
        $this->load->view('whats/botao');
        $this->load->view('common/rodape');
        $this->load->view('common/footer');
	}

	public function contato()
	{
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->model('ContatoModel', 'model');
		$this->model->salvar();
		$this->load->view('contato/form');
		$this->load->view('common/rodape');
		$this->load->view('common/footer');
	}
}
