<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index(){
        $this->home();
    }

    public function home(){
        $this->loadLang();
        $data['title'] = "Penzión Modrovka";
        $this->load->view("header",$data);
        $this->load->view("main_content",$data);
        $this->load->view("footer",$data);
    }

    public function contact(){
        $this->loadLang();
        $data['title'] = "Kontakt";
        $this->load->view("header",$data);
        $this->load->view("contact_content",$data);
        $this->load->view("footer",$data);
    }

    public function photos(){
        $this->loadLang();
        $data['title'] = "Fotogaléria";
        $this->load->view("header",$data);
        $this->load->view("photos_content",$data);
        $this->load->view("footer",$data);
    }

    public function accomodation(){
        $this->loadLang();
        $data['title'] = "Ubytovanie";
        $this->load->view("header",$data);
        $this->load->view("accomodation_content",$data);
        $this->load->view("footer",$data);
    }

    public function attractions(){
        $this->loadLang();
        $data['title'] = "Okolie";
        $this->load->view("header",$data);
        $this->load->view("attractions_content");
        $this->load->view("footer");
    }

    public function change($type){
        //meni session pre jazyk, refresh page
        $this->session->set_userdata('lang',$type);
        redirect($this->session->userdata('page'), "refresh");
    }

    public function loadLang(){
        //nacita lang
        $lang = $this->session->userdata("lang")==null?"slovak":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
    }
}
