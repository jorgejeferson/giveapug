<?php if (!defined('BASEPATH')) die();
class Crud extends Main_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->helper('form');
   }

	public function index() {
   	$dadosConteudo = array(
   		'titulo' => 'Crud de idioma',
   		'conteudo' => '<p>Index do crud</p>',
   		'pagina' => 'visualizar'
   	);

      $this->load->view('templates/crud/crud', $dadosConteudo);
   }

   public function novo() {
      $dadosConteudo = array(
         'titulo' => 'Adicionando um idioma',
         'conteudo' => '<p>Adicionando um novo idioma</p>',
         'pagina' => 'novo'
      );

      $this->load->view('templates/crud/crud', $dadosConteudo);
   }

   public function visualizar() {
      $dadosConteudo = array(
         'titulo' => 'Listando dos idiomas',
         'conteudo' => '<p>Visualizando os idiomas</p>',
         'pagina' => 'visualizar'
      );
      
      $this->load->view('templates/crud/crud', $dadosConteudo);
   }

   public function editar() {
      $dadosConteudo = array(
         'titulo' => 'Editando o idioma',
         'conteudo' => '<p>Editando o idioma</p>',
         'pagina' => 'editar'
      );
      
      $this->load->view('templates/crud/crud', $dadosConteudo);
   }

   public function excluir() {
      $dadosConteudo = array(
         'titulo' => 'Excluíndo idioma',
         'conteudo' => '<p>Excluindo um idioma</p>',
         'pagina' => 'excluir'
      );
      
      $this->load->view('templates/crud/crud', $dadosConteudo);
   }

}