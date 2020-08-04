<?php
    class User_model extends CI_Model{
        
        public function __construct()
        {
                $this->load->database();
        }

        public function checkUser(){ //tsy maintsy efa !=NULL ny $this->input->post('username'/'pwd') satria nisy anle form_validation
           //verifiena oe anaty base ve le username sy pwd
           $query = $this->db->get_where('admins',array('username' =>  $this->input->post('username') , 'pwd' =>  $this->input->post('pwd')));
           
           if(empty($query->row_array())){ //ra tsisy ninina averiny de mila inscription/insertion user
                
                $data['erreur_login'] = 'Tsy mbola inscrit o';
                $data['title'] = 'Vous n\'êtes pas encore inscrit(e)';
                $this->load->view('templates/header', $data);
                $this->load->view('pages/login',$data);
                $this->load->view('templates/footer');

           }else{ //ra tsisy blem
                
                
                    
                
                //$data['pwd_session'] = $query->row_array()['pwd'];
                session_start();
                $_SESSION['user'] = $query->row_array()['username'];
                //satria back-office de reto daholo ny news efa anaty base 
                $query = $this->db->get('news');
                $data['news'] = $query->result_array(); //mandefa tableau io , rehefa haka ny news any am adminMenu zany dia oe foreach $news_item['title'] as news
                
                $this->load->view('pages/menuAdmin',$data);
                $this->load->view('templates/footer');
           } 

        }


    }


?>