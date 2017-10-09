<?php

class CtrlTickets extends CI_Controller
{
   function index()
    {
    $data['titre'] = "Gestion tickets ==> connexion";
    $data['titre2']= "Affichage des tickets";
       //$data['login'] = $_GET['loginUser'];
       //$data['mdp']= $_GET['pwdUser'];
       
       //$this->load->model("Model_Accueil");
       //$data['mdp'] = $_GET('mdp');
        //$data['login'] = $_GET('login');
       //$this->load->model("Model_Accueil");
      // $this->load->Model_Accueil->GetLogin($data['login']);
       
        
       //$this->load->Model_Accueil->GetPassword($login);
       $this->load->view("v_Accueil",$data);
    }
    function verifierLogin()
    {
       
        $login = $_GET['login'];
        $this->load->model("Model_Accueil");
         
        $data['leLogin'] = $this->load->Model_Accueil->GetLogin($login);
  
        if($login == $data['leLogin'])
            {
                verifierMdp();
            }
    }
    function verifierMdp()
                { 
                    $mdp = $_GET['mdp'];
                    
                    $this->load->model("Model_Accueil");

                    $data['leMdp'] = $this->load->Model_Accueil->GetPassword($mdp);
                        if($mdp == $data['leMdp'])
                            {
                            $this->load->view("v_Ticket",$data);
                            }
                } 
   
        
        
    
   
}
