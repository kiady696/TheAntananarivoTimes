<?php
class News extends CI_Controller { //default controller mapiseo ny news rehetra

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Entrez votre nouvel article';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)  //ra misy diso ny inputs
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('news/success');
    }
}

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'Les actualités';
                
                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
            if($slug != NULL){
                echo 'le slug est :'.$slug;
            }
                
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
        {
                // WHOOPS 'tsisy news_item mivoaka hono';
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
        }

        
}