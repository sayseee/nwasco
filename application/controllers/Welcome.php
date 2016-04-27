<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    function __construct() //this could also be called function Main(). the way I do it here is a PHP5 constructor
    {
        parent::Controller();
    }

	public function index()
    {
        $this->load->view('welcome_page.php');
        $this->load->view('dashboard.php');
        $this->load->view('footer.php');
    }
}