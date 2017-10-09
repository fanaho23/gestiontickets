<?php
class Model_Accueil extends CI_Model
{
    function GetLogin($login){
        $sql->db->query('Select loginUser from users where loginUser='.$login);
       
        return $sql->result();
    }
    function GetPassword($mdp)
    {
       $sql->db->query('Select pwdUser from users where pwdUser='.$mdp);
        
        return $sql->result();
    }
}