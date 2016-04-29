<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI
class Utilities extends CI_Controller {

   function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('core'); // load model
        $this->load->model('towns'); // load model
        $this->load->model('utilities_model'); // load model
        $this->load->model('directives_model'); // load model
        $this->load->model('licences_model'); // load model
        $this->load->model('projects_model'); // load model
    }


    public function index()
    {
        // Get data from model
        $data['utilities'] = $this->utility->getAll();
 
    }

    public function details($id)//single post page
    {    
        $data['utilities'] = $this->utilities_model->getUtilities();
        $data['directives'] = $this->utilities_model->listDirectives($id);
        $data['projects'] = $this->utilities_model->listProjects($id);
        $data['tariffs'] = $this->utilities_model->listTarrifs($id);
        $data['cunits'] = $this->utilities_model->getById($id); 
         if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['lname'] = $session_data['lname'];
     $data['level'] = $session_data['level']; 
     $cudata = $this->utilities_model->getById($id); 
     $data['utility'] = $cudata['utility'];
     $this->load->view('header', $data);
     $this->load->view('sidebar-left', $data);
       $this->load->view('templates/view_utility', $data);
     $this->load->view('sidebar-right', $data);
     $this->load->view('footer', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login');
   }
 }




    public function create()
    {
        if($_utility)
        {
            // Build utility object
            $utility = new utility_model();
            $utility->title = $this->input->utility('title', TRUE);
            $utility->content = $this->input->utility('content', TRUE);

            // Save utility to database
            if ($utility->save()) {
                redirect(base_url(), 'location');
            }
        }

        // Load helpers
        $this->load->helper('form');

        // Initialize form
        $data['action'] = site_url('blog/create');
        $data['title'] = NULL;
        $data['content'] = NULL;

        // Load views
        $this->load->view('header');
        $this->load->view('upsert', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        if ($_utility)
        {
            // Build utility object
            $utility = new utility_model();
            $utility->id = $this->uri->segment(3);
            $utility->title = $this->input->utility('title', TRUE);
            $utility->content = $this->input->utility('content', TRUE);

            // Save utility to database
            if ($utility->save()) {
                redirect(base_url(), 'location');
            }
        }

        // Get utility from database
        $id = $this->uri->segment(3);
        $utility = $this->utility->getById($id);

        // Initialize form
        $this->load->helper('form');
        $data['action'] = site_url('blog/update/'.$id);
        $data['title'] = $utility->title;
        $data['content'] = $utility->content;

        // Load views
        $this->load->view('header');
        $this->load->view('upsert', $data);
        $this->load->view('footer');
    }

    public function delete()
    {
        $utility = new utility_model();
        $utility->id = $this->uri->segment(3);
        if ($utility->delete()) {
            redirect(base_url(), 'location');
        }
    }
}