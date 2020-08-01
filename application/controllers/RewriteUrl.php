<?php
    class RewriteUrl extends CI_Controller{
        
        public function view($arg1 = NULL,$arg2 = NULL){
            if($arg1 === NULL && $arg2 === NULL){
                $this->load->view('pages/essai.html');
            }else{
                $data['id'] = $arg1;
                $data['idcat'] = $arg2;
                $data['title'] = 'test';

                $this->load->view('templates/header', $data);
                $this->load->view('pages/module',$data);
                $this->load->view('templates/footer');
            }
        }
    }


?>