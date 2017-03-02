<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class template_front_end
{
   
    var $obj;
    var $layout;

    function template_front_end($layout = "")
    {
       
        $this->obj =& get_instance();
        $this->layout = $layout;
    }

    function setLayout($layout)
    {

      $this->layout = $layout;
    }

    function view($view, $data=null, $return=false)
    {   
        $loadedData = array();
        $loadedData['content_for_layout'] = $this->obj->load->view($view,$data,true);

        //---------------------------------------- load giỏ hàng -----------------------------------------

        //$data['dataShop'] = $this->getProductInShoppingCart();
        //$loadedData['content_for_viewCart'] = $this->obj->load->view('frontend/small_cart',$data,true);

        //---------------------------------------- load login -----------------------------------------
        if($return) {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }
}