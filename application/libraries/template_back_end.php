<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_layout
{

    var $obj;
    var $layout;

    function Admin_layout($layout = "")
    {
        $this->obj =& get_instance();
        $this->layout = $layout;

        $this->obj->load->model('mcountuser');
        $this->obj->load->model('mcountvisit');

        $sess =$this->obj->session->userdata('users_Id_Admin');
        if($sess == null) {
           redirect('admin/login');
        }
        
    }

    function setLayout($layout)
    {
      $this->layout = $layout;
    }

    function view($view, $data=null, $return=false)
    {

        $loadedData = array();
        //---------------------------------------- truy cập thống kế -----------------------------------------

        $ip = $_SERVER["REMOTE_ADDR"]; 
        $agent = $_SERVER["HTTP_USER_AGENT"];
        $datetime = date("Y/m/d") . ' ' . date('H:i:s') ;
        $time = time();
        $time_check = $time-600; //SET TIME 10 Minute

        $checkExitsIP = $this->obj->mcountuser->checkExitsIP($ip);
        if(!$checkExitsIP) {
            $this->obj->mcountuser->insertIPAccess($ip, $agent, $datetime, $time);
        }
        
        $checkAdressAccess = $this->obj->mcountvisit->checkAddressVisit($ip);
        if(!$checkAdressAccess) {
            $this->obj->mcountvisit->insertIPAccess($ip, date("Y/m/d"), $time);
        }

        //------------------------------------------ Load all view ---------------------------------------

        $data['countOnline'] = $this->obj->mcountuser->countOnline();
        $data['countVisitALL'] = $this->obj->mcountvisit->countVisitALL();
        $data['countVisitMonth'] = $this->obj->mcountvisit->countVisitMonth();
        $data['countVisitToDay'] = $this->obj->mcountvisit->countVisitToDay();

        $this->obj->mcountuser->deleteIPAccess($time_check); //delete check online after 10 min


        $loadedData['content_for_Main'] = $this->obj->load->view($view,$data,true);
        $loadedData['content_for_Name_Admin_Login'] =  $this->obj->session->userdata('users_FullName');

        if($return) {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }
    
}