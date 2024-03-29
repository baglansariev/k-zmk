<?php
	namespace controllers;

	use core\engine\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Тестовое описание');
	    	$this->view->asset->setMetaKeys('ключ1, ключ2');
	    	$this->view->asset->setTitle('Главная');

	    	// https://github.com/peachananr/purejs-onepage-scroll

	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');
	    	$this->view->response('Main/index', $data);
	    }
	}
