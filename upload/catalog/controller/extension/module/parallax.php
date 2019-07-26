<?php
class ControllerExtensionModuleParallax extends Controller {
    public function index($setting) {
        static $module = 1;
        $this->load->language('extension/module/parallax');
        
        $this->document->addScript('catalog/view/javascript/jquery/parallax/parallax.min.js');

        $data['image'] = $setting['image'];
        $data['title_1'] = $setting['title_1'];
        $data['title_2'] = $setting['title_2'];
        $data['content'] = $setting['content'];
        return $this->load->view('extension/module/parallax', $data);
    }
}