<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Transactions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        require_once $this->assets . 'ci_helpers/style_helper.php';

        $this->language['active'] = "id";
    }

    public function cash()
    {
        $data = [
            'meta'    => [
                'keywords'      => 'dhon studio, dhonstudio, dhonstudio.com, business assistant',
                'author'        => 'Dhon Studio',
                'description'   => 'Business Assistant.',
            ],
            'title'         => 'Dhon Studio Business Assistant',
            'font'          => [
                $this->font['google-Nunito']
            ],
            'css'           => [
                $this->css['fontawesome5'],
                $this->css['sb-admin-2'],
            ],
            'js'            => [],
            'js_footer'    => [
                $this->js['jquery36'],
                $this->js['bootstrap-bundle4'],
                $this->js['jquery-easing'],
                $this->js['sb-admin-2'],
            ],
            'custom_style'    => [],
            'body_id'       => 'page-top',
            'body_class'    => '',
            'copyright'     => '© 2022 | Dhon Studio - <a href="https://dhonstudio.com">dhonstudio.com</a>',
        ];

        $this->load->view('ci_templates/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('transactions/cash');
        $this->load->view('ci_templates/footer');
        $this->load->view('ci_templates/end');
    }
}
