<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rhizome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['msg']=$this->session->flashdata('msg');
		$this->load->view('login',$data);
    }
    
    public function validate_login()
    {
        $data=$this->input->post();
        unset($data['submit']);
        
        $this->form_validation->set_rules('username','Username','Required|trim');
        $this->form_validation->set_rules('password','Password','Required|trim');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run())
        {
            $username=$data['username'];
            $pass=$data['password'];
            $this->load->model('Rhizome_model');
            $result=$this->Rhizome_model->is_valid_login($username,$pass);
            if($result)
            {
                
                $this->session->set_userdata($result[0]);
                redirect('Rhizome/show_dashboard');
            }else{
                $this->session->set_flashdata('msg', 'Username or Password is not correct');
                redirect('Rhizome/');
            }
        }
    }

    //showing dashboard

    public function show_dashboard()
    {
        
        if($this->session->has_userdata('admin_email'))
        {
            $this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('includes/footer');
        }else{
            redirect('Rhizome/');
        }
    }

    //showing adding project title from here

    public function add_project()
    {
        if($this->session->has_userdata('admin_email'))
        {
            $data['msg']=$this->session->flashdata('msg');
            $this->load->model('Rhizome_model');
            $data['result']=$this->Rhizome_model->get_types();
            $this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('projects/add_project_form',$data);
            $this->load->view('includes/footer');
        }else{
            redirect('Rhizome/');
        }
    }

    public function save_project()
    {
        $data=$this->input->post();
        unset($data['submit']);
        $this->load->model('Rhizome_model');
        $last_insert_id=$this->Rhizome_model->insert_building($data);
        $dataInfo = array();
        $files = $_FILES;
        $this->load->library('upload');
        $cpt = count($_FILES['building_images']['name']);
       
        for($i=0; $i<$cpt; $i++)
            {           
        $_FILES['building_images']['name']= $files['building_images']['name'][$i];
        $_FILES['building_images']['type']= $files['building_images']['type'][$i];
        $_FILES['building_images']['tmp_name']= $files['building_images']['tmp_name'][$i];
        $_FILES['building_images']['error']= $files['building_images']['error'][$i];
        $_FILES['building_images']['size']= $files['building_images']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('building_images');
        $dataInfo[] = $this->upload->data();
            }
            
           $result = $this->Rhizome_model->insert_building_images($dataInfo,$last_insert_id);
            if($result)
            {
                $this->session->set_flashdata('msg', 'Data inserted successfully');
            }else{
                $this->session->set_flashdata('msg', 'Some error occured');
            }
            redirect('Rhizome/add_project');
       
    }

    private function set_upload_options()
    {   
            //upload an image options
         $config = array();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
       
        $config['overwrite']     = FALSE;

        return $config;
        }

        public function show_buildings()
        {
            if($this->session->has_userdata('admin_email'))
            {
                $data['msg']=$this->session->flashdata('msg');
                $this->load->model('Rhizome_model');
                $data['result']=$this->Rhizome_model->get_buildings();
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('projects/show_buildings',$data);
                $this->load->view('includes/footer');
            }else{
                redirect('Rhizome/');
            }
        }

        public function show_edit_images_page($building_id)
        {
            if($this->session->has_userdata('admin_email'))
            {
                $data['msg']=$this->session->flashdata('msg');
                $this->load->model('Rhizome_model');
                $data['result']=$this->Rhizome_model->get_images($building_id);
                $data['building_name']=$this->Rhizome_model->get_building_name($building_id);
                $data['building_id']=$building_id;
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('projects/show_building_images',$data);
                $this->load->view('includes/footer');
            }else{
                redirect('Rhizome/');
            }
        }

        public function delete_image($image_id,$building_id)
        {
            $this->load->model('Rhizome_model');
                $result=$this->Rhizome_model->delete_image($image_id);
                if($result)
                {
                    $this->session->set_flashdata('msg', 'Image Deleted successfully');
                }else{
                    $this->session->set_flashdata('msg', 'Some error occured');
                }
                redirect('Rhizome/show_edit_images_page/'.$building_id);
        }

        public function change_image($image_id,$building_id)
        {
            if($this->session->has_userdata('admin_email'))
            {
                
                $this->load->model('Rhizome_model');
                
                $data['result']=$this->Rhizome_model->get_images($building_id);
                $data['building_name']=$this->Rhizome_model->get_building_name($building_id);
                $data['fred']="Changing image for".$data['building_name'];
                $data['image_id']=$image_id;
                $data['building_id']=$building_id;
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('projects/show_change_image_page',$data);
                $this->load->view('includes/footer');
            }else{
                redirect('Rhizome/');
            }
        }

        public function add_image($building_id)
        {
            if($this->session->has_userdata('admin_email'))
            {
                $this->load->model('Rhizome_model');
                
                $data['result']=$this->Rhizome_model->get_images($building_id);
                $data['building_name']=$this->Rhizome_model->get_building_name($building_id);
                $data['fred']="Adding image for".$data['building_name'];
                $data['building_id']=$building_id;
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('projects/show_change_image_page',$data);
                $this->load->view('includes/footer');
            }else{
                redirect('Rhizome/');
            }
        }
        public function update_image($image_id,$building_id)
        {
            unset($data['submit']);
            $this->upload->initialize($this->set_upload_options());
            if ($this->upload->do_upload('building_image'))
            {
             $file_data=$this->upload->data();
             $section_image=$file_data['file_name'];
             $msg="Section Successfully Created";

            }else{
             $msg = $this->upload->display_errors('', '');

             $section_image='';
         }
         $this->load->model('Rhizome_model');
         $result=$this->Rhizome_model->update_image($building_id,$image_id,$section_image);
         if($result)
         {
            $this->session->set_flashdata('msg', 'Image Changed successfully');
         }else{
            $this->session->set_flashdata('msg', 'Some error occured');
         }
            redirect('Rhizome/show_edit_images_page/'.$building_id);
        }
}
