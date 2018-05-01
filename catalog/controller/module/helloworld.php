<?php

	class ControllerModuleHelloworld extends Controller {
		public function index(){
			$this->language->load('module/helloworld'); // loads the language file of helloworld
			 
			$this->data['heading_title'] = $this->language->get('heading_title'); // set the heading_title of the module
			 
			$this->data['helloworld_value'] = html_entity_decode($this->config->get('helloworld_text_field')); // gets the saved value of helloworld text field and parses it to a variable to use this inside our module view
			 
			$this->template = $this->config->get('config_template') . '/template/module/helloworld.twig'; // Template path of store helloworld module
			
			$this->render(); // renders the output
		}
	}

?>