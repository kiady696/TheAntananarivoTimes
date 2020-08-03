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
                $this->load->view('pages/login',$data);
           }else{ //ra tsisy blem
                $data['user_session'] = $query->row_array()['username'];
                //satria back-office de reto daholo ny news efa anaty base 
                $query = $this->db->get('news');
                $data['news_item'] = $query->result_array(); //mandefa tableau io , rehefa haka ny news any am adminMenu zany dia oe for(i) :$news_item[i]['title'] ohatra
                $this->load->view('pages/menuAdmin',$data);
           } 

        }


    }


?>