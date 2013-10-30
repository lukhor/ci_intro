<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 24.10.2013
 * Time: 10:53
 * To change this template use File | Settings | File Templates.
 */

class Site extends CI_Controller {

    public function index(){
        $this->home();
    }

    public function home(){
        $data['title'] = "Home";
        $data['name'] = "Home";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("main_content",$data);
        $this->load->view("footer",$data);
    }

    public function contact(){
        $data['title'] = "Kontakt";
        $data['name'] = "Kontakt";
        $this->load->view("header",$data);
        $this->load->view("contact_content",$data);
        $this->load->view("footer",$data);
    }

    public function photos(){
        $data['title'] = "Fotky";
        $data['name'] = "Fotky";
        $this->load->view("header",$data);
        $this->load->view("photos_content",$data);
        $this->load->view("footer",$data);
    }

    public function pricelist(){
        $data['title'] = "Cenník";
        $data['name'] = "Cenník";
        $this->load->view("header",$data);
        $this->load->view("pricelist_content",$data);
        $this->load->view("footer",$data);
    }

    public function reservation(){
        $data['title'] = "Rezervácie";
        $data['name'] = "Rezervácie";
        $this->load->view("header",$data);
        $this->load->view("reservation_content");
        $this->load->view("footer");

    }
}
