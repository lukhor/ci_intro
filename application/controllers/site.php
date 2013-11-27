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
        $this->loadLang();
        $data['title'] = "Penzión Modrovka";
        $data['name'] = "Home";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("main_content",$data);
        $this->load->view("footer",$data);
    }

    public function contact(){
        $this->loadLang();
        $data['title'] = "Kontakt";
        $data['name'] = "Kontakt";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("contact_content",$data);
        $this->load->view("footer",$data);
    }

    public function photos(){
        $this->loadLang();
        $data['title'] = "Fotogaléria";
        $data['name'] = "Fotky";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("photos_content",$data);
        $this->load->view("footer",$data);
    }

    public function pricelist(){
        $this->loadLang();
        $data['title'] = "Cenník";
        $data['name'] = "Cenník";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("pricelist_content",$data);
        $this->load->view("footer",$data);
    }

    public function reservation(){
        $this->loadLang();
        $data['title'] = "Rezervácie";
        $data['name'] = "Rezervácie";
        $this->load->view("header_bootstrap",$data);
        $this->load->view("reservation_content");
        $this->load->view("footer");
    }

    public function change($type){
        //meni session pre jazyk, refresh page
        $this->session->set_userdata('lang',$type);
            redirect(".", "refresh");
    }

    public function loadLang(){
        //nacita lang
        $lang = $this->session->userdata("lang")==null?"slovak":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
    }
}
