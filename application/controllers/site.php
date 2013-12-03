<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index(){
        $this->session->set_userdata('lang','slovak');
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

    public function sent_mail(){
        //premenne z formulara
        $name = $this->input->post('nameOf');
        $datefrom = $this->input->post('dateFrom');
        $dateto = $this->input->post('dateTo');
        $numberof = $this->input->post('amountOfPerson');
        $contact = $this->input->post('contact1');
        $note = $this->input->post('note');

        //posielanie mailu
        $config['protocol'] = 'mail';
        $config['charset'] = 'utf-8';
        $config['smtp_host'] = "gator4053.hostgator.com";
        $config['smtp_user'] = "privat@tvin.sk";
        $config['smtp_pass'] = "mineralka";
        $config['smtp_port'] = 465;
        $config['smtp_timeout'] = 5;
        $config['mailtype'] = 'text';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->from('privat@tvin.sk', 'ja');
        $this->email->to('lukhor@gmail.com');

        $this->email->subject('Rezervácia ubytovania');

        $messageof = 'Rezervácia ubytovania pre: ' . $name . " od " . $datefrom . " do ". $dateto . '.'
            . "\nPočet osôb: " . $numberof
            . "\nKontakt na osobu: " . $contact
            . "\nPoznámka k ubytovaniu: " . $note ;

        $this->email->message($messageof);

        $this->email->send();
        echo "mail was sent";
        /*echo $this->email->print_debugger();*/
    }
}
