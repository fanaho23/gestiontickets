<?php

class CtrlTickets extends CI_Controller
{
   function index()
    {
    $data['titre'] = "dd";
       //$data['login'] = $_GET['loginUser'];
       //$data['mdp']= $_GET['pwdUser'];
       
       //$this->load->model("Model_Accueil");
       
       //$this->load->Model_Accueil->GetPassword($login);
       $this->load->view("v_Accueil");
    }
    
    function verifierLogin()
    {
        $login = $_GET['login'];
        $mdp = $_GET['mdp'];
    }
}
