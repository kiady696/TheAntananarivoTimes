<?php
    class User extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            //loadena ny model mba ho afaka apesain'ny controller naiza naiza
            $this->load->model('user_model');
            $this->load->helper('url_helper');
        }

        public function login(){  //ny ato am controller mbola mverifier anle username sy mdp napdirnle user ftsny 
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Log in here';

            $this->form_validation->set_rules('username','Nom d\'utilisateur','required');
            $this->form_validation->set_rules('pwd','Mot de passe','required');

            if ($this->form_validation->run() === FALSE){   //ra nisy diso ny napdirna de reload page + error msg
                $this->load->view('templates/header', $data);
                $this->load->view('pages/login');
                $this->load->view('templates/footer');

            }else{  // Raha tsy nisy tomika (username required|unique , pwd required)
                
                $this->user_model->checkUser();
                
            }


        }

        public function deconnect(){
            
                session_unset();
                session_destroy();
            
            
            header('Location:'.base_url(''));
        }





    }


?>