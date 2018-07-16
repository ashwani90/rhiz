<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index()
    {
        $this->load->model('Site_model');
        $data['banners'] = $this->Site_model->get_banners();
        $data['projects']=$this->Site_model->get_projects_for_index_page();
        $pre['pro']='home';
        //var_dump($data['projects']);die;
        $this->load->view('site/header');
        $this->load->view('site/navbar',$pre);
        $this->load->view('site/index',$data);
        $this->load->view('site/footer');
    }

    public function get_projects()
    {
        $this->load->model('Site_model');
        $data['building_types']=$this->Site_model->get_building_types();
        $data['buildings']=$this->Site_model->get_buildings_all();
        $pre['pro']='projects';
        //echo "<pre>"; var_dump($data['buildings']);die;
        $this->load->view('site/header');
        $this->load->view('site/navbar',$pre);
        $this->load->view('site/projects/projects',$data);
        $this->load->view('site/footer');
    }

    //research page
    public function get_research_page()
    {
        $pre['pro']='research';
        $this->load->view('site/header');
        $this->load->view('site/navbar',$pre);
        $this->load->view('site/research');
        $this->load->view('site/footer');
    }

    //about page
    public function get_about_page()
    {
        $pre['pro']='about';
        $this->load->view('site/header');
        $this->load->view('site/navbar',$pre);
        $this->load->view('site/about');
        $this->load->view('site/footer');
    }

    //contact page
    public function get_contact_page()
    {
        $pre['pro']='contact';
        $this->load->view('site/header');
        $this->load->view('site/navbar',$pre);
        $this->load->view('site/contact');
        $this->load->view('site/footer');
    }
}
