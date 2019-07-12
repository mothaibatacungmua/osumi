<?php

class ControllermarketplaceSpamBot extends Controller {
    public function index() {
        $this->load->language('marketplace/spam_bot');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
        $this->document->addScript('view/javascript/ckeditor/adapters/jquery.js');
        
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/spam_bot', 'user_token=' . $this->session->data['user_token'])
		);
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
		
        $this->response->setOutput($this->load->view('marketplace/spam_bot', $data));
	}
}