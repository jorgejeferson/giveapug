<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   	public function index() {
      	
      	$dadosConteudo = array(
      		'titulo' => 'Ajude-me a consegui um Pug',
      		'conteudo' => '	<p>Acima de tudo, é fundamental ressaltar que o novo modelo estrutural aqui preconizado afeta positivamente a correta previsão do fluxo de informações.</p>
            				<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            				<p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>',
      		'titBotao' => 'Leia mais'
      	);

      	$this->load->view('include/header');
      	$this->load->view('templates/menubar');
      	$this->load->view('templates/carousel');
      	$this->load->view('templates/sample', $dadosConteudo);
      	$this->load->view('templates/pug-na-rede');
      	$this->load->view('include/footer');
	}

	public function about() {
      	$dadosConteudo = array(
      		'titulo' => 'Ajude-me a consegui um Pug',
      		'conteudo' => '	<p>Acima de tudo, é fundamental ressaltar que o novo modelo estrutural aqui preconizado afeta positivamente a correta previsão do fluxo de informações.</p>
            				<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            				<p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>',
      		'titBotao' => 'Leia mais'
      	);

		$this->load->view('include/header');
      	$this->load->view('templates/menubar');
      	$this->load->view('templates/sample', $dadosConteudo);
      	$this->load->view('include/footer');
	}
}